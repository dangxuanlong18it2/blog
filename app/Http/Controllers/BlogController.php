<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Session;

class BlogController extends Controller
{
    public function all_blog() {
        $name = Session::get('name');
        $all_blog = DB::table('tf_post')->orderBy('tf_post_id', 'desc')->paginate(5);
        $count_post = DB::table('tf_post')->count();
        $count_draft = DB::table('tf_draft_post')->count();

    	return view('tf_Admin.tf_Blog_Setting.all_blog', [
            'tittle' => 'ALL BLOG',
            'count_post' => $count_post,
            'count_draft' => $count_draft
        ])->with('all_blog', $all_blog)->with('name',$name);
    }

    public function blog() {
        $blog_listing = DB::table('tf_post')->orderBy('tf_post_id', 'desc')->paginate(5);
        $name = Session::get('name');
    	return view('tf_News.blog')->with('blog_listing',$blog_listing)->with('name',$name);
    }

    public function blog_detail($tf_post_url) {

        $blog_single = DB::table('tf_post')->where('tf_post_url',$tf_post_url)->get();
        $name = Session::get('name');
    	return view('tf_News.blog_detail')->with('blog_single',$blog_single)->with('name',$name);
    }

    public function add_new_post() { 
        $name = Session::get('name');
        return view('tf_Admin.tf_Blog_Setting.add_new_post', [
            'tittle' => 'ADD NEW POST'
        ])->with('name',$name);
    }

    public function post_draft_blog(Request $request) {
        $name = Session::get('name');
        $SEO = 0;

        $key_content = substr_count(strtolower($request->tf_post_content), strtolower($request->tf_post_key));
        $length_content = strlen($request->tf_post_content);
        $length_meta = strlen($request->tf_post_meta);
        $key_meta = substr_count(strtolower($request->tf_post_meta), strtolower($request->tf_post_key));
        $length_titleseo = strlen($request->tf_post_titleseo);
        $key_titleseo = substr_count(strtolower($request->tf_post_titleseo), strtolower($request->tf_post_key));
        $key_url = strtolower(str_replace(" ","-",$request->tf_post_key));
        $key_sapo = substr_count(strtolower($request->tf_post_sapo), strtolower($request->tf_post_key));

        // Mật độ từ khóa
        if ($key_content > 0) {
            if ($key_content > 8) {
                $SEO += 30;
            } elseif ($key_content > 4 && $key_content < 8) {
                $SEO += 20;
            } else{
                $SEO += 10;
            }
        } 

        // Độ dài của nội dung
        if ($length_content > 0 && $length_content < 700) {
            $SEO += 10;
        }elseif ($length_content > 700 && $length_content < 1600) {
            $SEO += 20;
        }elseif ($length_content > 1600) {
            $SEO += 30;
        }

        // Từ khóa và độ dài của meta description
        if ($length_meta < 160) {    
            if ($key_meta > 0) {
                $SEO += 5;
            } 
        }

        // Từ khóa và độ dài của tiêu đề seo
        if ($length_titleseo < 60) {  
            if ($key_titleseo > 0) {
                $SEO += 5;
            }
        }

        // Từ khóa trong sapo
        if ($key_sapo > 0) {
            $SEO += 5;
        }

        // URL chuẩn SEO
        if ($key_url == $request->tf_post_url) {
            $SEO += 5;
        }

        if ($request->has('check')) {

            $data = array();
            $data['tf_draft_date'] = Carbon::now();
            $data['tf_draft_title'] = $request->tf_post_title;
            $data['tf_draft_titleseo'] = $request->tf_post_titleseo;
            $data['tf_draft_author'] = "HuyLe";
            $data['tf_draft_sapo'] = $request->tf_post_sapo;
            $data['tf_draft_meta'] = $request->tf_post_meta;
            $data['tf_draft_url'] = $request->tf_post_url;
            $data['tf_draft_key'] = $request->tf_post_key;
            $data['tf_draft_content'] = $request->tf_post_content;
            $data['tf_draft_content_length'] = $length_content;
            $data['tf_draft_point'] = $SEO;

            if (isset($request->file_image)) {
                $data['tf_draft_image'] = $request->file_image;
            }
                    
            if (isset($request->draft_id)) {
                $delete_post = DB::table('tf_post')
                                ->where('tf_post_key', $request->tf_post_key)
                                ->where('tf_post_url', $request->tf_post_url)->delete();

                $tf_draft_id = DB::table('tf_draft_post')
                                ->where('tf_draft_id', $request->draft_id)->update($data);
                $new = DB::table('tf_draft_post')
                        ->where('tf_draft_author','HuyLe')
                        ->where('tf_draft_id', $request->draft_id)->get();
            }else {
                $delete_post = DB::table('tf_post')
                                ->where('tf_post_key', $request->tf_post_key)
                                ->where('tf_post_url', $request->tf_post_url)->delete();

                $tf_draft_id = DB::table('tf_draft_post')->insertGetid($data);
                $new = DB::table('tf_draft_post')
                        ->where('tf_draft_author','HuyLe')
                        ->where('tf_draft_id', $tf_draft_id)->get();
            }
        }elseif ($request->has('tf_dangpost')) {
            $data = array();
            $data['tf_post_date'] = Carbon::now();
            $data['tf_post_title'] = $request->tf_post_title;
            $data['tf_post_titleseo'] = $request->tf_post_titleseo;
            $data['tf_post_author'] = "HuyLe";
            $data['tf_post_sapo'] = $request->tf_post_sapo;
            $data['tf_post_meta'] = $request->tf_post_meta;
            $data['tf_post_url'] = $request->tf_post_url;
            $data['tf_post_key'] = $request->tf_post_key;
            $data['tf_post_content'] = $request->tf_post_content;
            $data['tf_post_content_length'] = $length_content;
            $data['tf_post_point'] = $SEO;

            if (isset($request->file_image)) {
                $data['tf_post_image'] = $request->file_image;
            }

            if (isset($request->tf_post_id)) {
                $delete_draft = DB::table('tf_draft_post')
                                ->where('tf_draft_key', $request->tf_post_key)
                                ->where('tf_draft_url', $request->tf_post_url)->delete();

                $tf_post_id = DB::table('tf_post')
                                ->where('tf_post_id', $request->tf_post_id)
                                ->update($data);
                $new = DB::table('tf_post')
                        ->where('tf_post_author','HuyLe')
                        ->where('tf_post_id', $request->tf_post_id)->get();
            }else {
                $delete_draft = DB::table('tf_draft_post')
                                ->where('tf_draft_key', $request->tf_post_key)
                                ->where('tf_draft_url', $request->tf_post_url)->delete();

                $tf_post_id = DB::table('tf_post')->insertGetid($data);
                $new = DB::table('tf_post')
                        ->where('tf_post_author','HuyLe')
                        ->where('tf_post_id', $tf_post_id)->get();
            }
        }

        return view('tf_Admin.tf_Blog_Setting.add_new_post', [
            'tittle' => 'ADD NEW POST',
            'new' => $new,
            'SEO' => $SEO
        ])->with('name',$name);

    }

    public function edit_post (Request $request,$tf_post_id) {
        $name = Session::get('name');
        $new = DB::table('tf_post')
                        ->where('tf_post_id',$tf_post_id)->get();

        return view('tf_Admin.tf_Blog_Setting.edit_post', [
            'tittle' => 'EDIT POST',
            'new' => $new
        ])->with('name',$name);
    }

    public function post_edit_blog (Request $request) {
        $name = Session::get('name');
        $SEO = 0;

        $key_content = substr_count(strtolower($request->tf_post_content), strtolower($request->tf_post_key));
        $length_content = strlen($request->tf_post_content);
        $length_meta = strlen($request->tf_post_meta);
        $key_meta = substr_count(strtolower($request->tf_post_meta), strtolower($request->tf_post_key));
        $length_titleseo = strlen($request->tf_post_titleseo);
        $key_titleseo = substr_count(strtolower($request->tf_post_titleseo), strtolower($request->tf_post_key));
        $key_url = strtolower(str_replace(" ","-",$request->tf_post_key));
        $key_sapo = substr_count(strtolower($request->tf_post_sapo), strtolower($request->tf_post_key));

        // Mật độ từ khóa
        if ($key_content > 0) {
            if ($key_content > 8) {
                $SEO += 30;
            } elseif ($key_content > 4 && $key_content < 8) {
                $SEO += 20;
            } else{
                $SEO += 10;
            }
        } 

        // Độ dài của nội dung
        if ($length_content > 0 && $length_content < 700) {
            $SEO += 10;
        }elseif ($length_content > 700 && $length_content < 1600) {
            $SEO += 20;
        }elseif ($length_content > 1600) {
            $SEO += 30;
        }

        // Từ khóa và độ dài của meta description
        if ($length_meta < 160) {    
            if ($key_meta > 0) {
                $SEO += 5;
            } 
        }

        // Từ khóa và độ dài của tiêu đề seo
        if ($length_titleseo < 60) {  
            if ($key_titleseo > 0) {
                $SEO += 5;
            }
        }

        // Từ khóa trong sapo
        if ($key_sapo > 0) {
            $SEO += 5;
        }

        // URL chuẩn SEO
        if ($key_url == $request->tf_post_url) {
            $SEO += 5;
        }

        if ($request->has('check')) {

            $data = array();
            $data['tf_draft_date'] = Carbon::now();
            $data['tf_draft_title'] = $request->tf_post_title;
            $data['tf_draft_titleseo'] = $request->tf_post_titleseo;
            $data['tf_draft_author'] = "HuyLe";
            $data['tf_draft_sapo'] = $request->tf_post_sapo;
            $data['tf_draft_meta'] = $request->tf_post_meta;
            $data['tf_draft_url'] = $request->tf_post_url;
            $data['tf_draft_key'] = $request->tf_post_key;
            $data['tf_draft_content'] = $request->tf_post_content;
            $data['tf_draft_content_length'] = $length_content;
            $data['tf_draft_point'] = $SEO;

            if (isset($request->file_image)) {
                $data['tf_draft_image'] = $request->file_image;
            }
                    
            if (isset($request->draft_id)) {
                $delete_post = DB::table('tf_post')
                                ->where('tf_post_key', $request->tf_post_key)
                                ->where('tf_post_url', $request->tf_post_url)->delete();

                $tf_draft_id = DB::table('tf_draft_post')
                                ->where('tf_draft_id', $request->draft_id)->update($data);
                $new = DB::table('tf_draft_post')
                        ->where('tf_draft_author','HuyLe')
                        ->where('tf_draft_id', $request->draft_id)->get();
            }else {
                $delete_post = DB::table('tf_post')
                                ->where('tf_post_key', $request->tf_post_key)
                                ->where('tf_post_url', $request->tf_post_url)->delete();

                $tf_draft_id = DB::table('tf_draft_post')->insertGetid($data);
                $new = DB::table('tf_draft_post')
                        ->where('tf_draft_author','HuyLe')
                        ->where('tf_draft_id', $tf_draft_id)->get();
            }
        }elseif ($request->has('tf_dangpost')) {
            $data = array();
            $data['tf_post_date'] = Carbon::now();
            $data['tf_post_title'] = $request->tf_post_title;
            $data['tf_post_titleseo'] = $request->tf_post_titleseo;
            $data['tf_post_author'] = "HuyLe";
            $data['tf_post_sapo'] = $request->tf_post_sapo;
            $data['tf_post_meta'] = $request->tf_post_meta;
            $data['tf_post_url'] = $request->tf_post_url;
            $data['tf_post_key'] = $request->tf_post_key;
            $data['tf_post_content'] = $request->tf_post_content;
            $data['tf_post_content_length'] = $length_content;
            $data['tf_post_point'] = $SEO;

            if (isset($request->file_image)) {
                $data['tf_post_image'] = $request->file_image;
            }

            if (isset($request->tf_post_id)) {
                $delete_draft = DB::table('tf_draft_post')
                                ->where('tf_draft_key', $request->tf_post_key)
                                ->where('tf_draft_url', $request->tf_post_url)->delete();

                $tf_post_id = DB::table('tf_post')
                                ->where('tf_post_id', $request->tf_post_id)
                                ->update($data);
                $new = DB::table('tf_post')
                        ->where('tf_post_author','HuyLe')
                        ->where('tf_post_id', $request->tf_post_id)->get();
            }else {
                $delete_draft = DB::table('tf_draft_post')
                                ->where('tf_draft_key', $request->tf_post_key)
                                ->where('tf_draft_url', $request->tf_post_url)->delete();

                $tf_post_id = DB::table('tf_post')->insertGetid($data);
                $new = DB::table('tf_post')
                        ->where('tf_post_author','HuyLe')
                        ->where('tf_post_id', $tf_post_id)->get();
            }
        }

        return view('tf_Admin.tf_Blog_Setting.edit_post', [
            'tittle' => 'ADD NEW POST',
            'new' => $new,
            'SEO' => $SEO
        ])->with('name',$name);
    }

    public function delete_post ($tf_post_id) {
        $new = DB::table('tf_post')
                        ->where('tf_post_id',$tf_post_id)->delete();

        return redirect()->route('all_blog');
    }

    public function draft_blog () {
        $name = Session::get('name');
        $all_blog = DB::table('tf_draft_post')->orderBy('tf_draft_id', 'desc')->paginate(6);

        $count_post = DB::table('tf_post')->count();
        $count_draft = DB::table('tf_draft_post')->count();

        return view('tf_Admin.tf_Blog_Setting.draft_blog', [
            'tittle' => 'DRAFT BLOG',
            'count_post' => $count_post,
            'count_draft' => $count_draft
        ])->with('all_blog', $all_blog)->with('name',$name);
    }

    public function edit_draft_post (Request $request,$tf_draft_id) {
        $name = Session::get('name');
        $new = DB::table('tf_draft_post')
                        ->where('tf_draft_id',$tf_draft_id)->get();

        return view('tf_Admin.tf_Blog_Setting.edit_draft_post', [
            'tittle' => 'EDIT DRAFT POST',
            'new' => $new
        ])->with('name',$name);
    }

    public function post_edit_draft (Request $request) {
        $name = Session::get('name');
        $SEO = 0;

        $key_content = substr_count(strtolower($request->tf_post_content), strtolower($request->tf_post_key));
        $length_content = strlen($request->tf_post_content);
        $length_meta = strlen($request->tf_post_meta);
        $key_meta = substr_count(strtolower($request->tf_post_meta), strtolower($request->tf_post_key));
        $length_titleseo = strlen($request->tf_post_titleseo);
        $key_titleseo = substr_count(strtolower($request->tf_post_titleseo), strtolower($request->tf_post_key));
        $key_url = strtolower(str_replace(" ","-",$request->tf_post_key));
        $key_sapo = substr_count(strtolower($request->tf_post_sapo), strtolower($request->tf_post_key));

        // Mật độ từ khóa
        if ($key_content > 0) {
            if ($key_content > 8) {
                $SEO += 30;
            } elseif ($key_content > 4 && $key_content < 8) {
                $SEO += 20;
            } else{
                $SEO += 10;
            }
        } 

        // Độ dài của nội dung
        if ($length_content > 0 && $length_content < 700) {
            $SEO += 10;
        }elseif ($length_content > 700 && $length_content < 1600) {
            $SEO += 20;
        }elseif ($length_content > 1600) {
            $SEO += 30;
        }

        // Từ khóa và độ dài của meta description
        if ($length_meta < 160) {    
            if ($key_meta > 0) {
                $SEO += 5;
            } 
        }

        // Từ khóa và độ dài của tiêu đề seo
        if ($length_titleseo < 60) {  
            if ($key_titleseo > 0) {
                $SEO += 5;
            }
        }

        // Từ khóa trong sapo
        if ($key_sapo > 0) {
            $SEO += 5;
        }

        // URL chuẩn SEO
        if ($key_url == $request->tf_post_url) {
            $SEO += 5;
        }

        if ($request->has('check')) {

            $data = array();
            $data['tf_draft_date'] = Carbon::now();
            $data['tf_draft_title'] = $request->tf_post_title;
            $data['tf_draft_titleseo'] = $request->tf_post_titleseo;
            $data['tf_draft_author'] = "HuyLe";
            $data['tf_draft_sapo'] = $request->tf_post_sapo;
            $data['tf_draft_meta'] = $request->tf_post_meta;
            $data['tf_draft_url'] = $request->tf_post_url;
            $data['tf_draft_key'] = $request->tf_post_key;
            $data['tf_draft_content'] = $request->tf_post_content;
            $data['tf_draft_content_length'] = $length_content;
            $data['tf_draft_point'] = $SEO;

            if (isset($request->file_image)) {
                $data['tf_draft_image'] = $request->file_image;
            }
                    
            if (isset($request->draft_id)) {
                $delete_post = DB::table('tf_post')
                                ->where('tf_post_key', $request->tf_post_key)
                                ->where('tf_post_url', $request->tf_post_url)->delete();

                $tf_draft_id = DB::table('tf_draft_post')
                                ->where('tf_draft_id', $request->draft_id)->update($data);
                $new = DB::table('tf_draft_post')
                        ->where('tf_draft_author','HuyLe')
                        ->where('tf_draft_id', $request->draft_id)->get();
            }else {
                $delete_post = DB::table('tf_post')
                                ->where('tf_post_key', $request->tf_post_key)
                                ->where('tf_post_url', $request->tf_post_url)->delete();

                $tf_draft_id = DB::table('tf_draft_post')->insertGetid($data);
                $new = DB::table('tf_draft_post')
                        ->where('tf_draft_author','HuyLe')
                        ->where('tf_draft_id', $tf_draft_id)->get();
            }
        }elseif ($request->has('tf_dangpost')) {
            $data = array();
            $data['tf_post_date'] = Carbon::now();
            $data['tf_post_title'] = $request->tf_post_title;
            $data['tf_post_titleseo'] = $request->tf_post_titleseo;
            $data['tf_post_author'] = "HuyLe";
            $data['tf_post_sapo'] = $request->tf_post_sapo;
            $data['tf_post_meta'] = $request->tf_post_meta;
            $data['tf_post_url'] = $request->tf_post_url;
            $data['tf_post_key'] = $request->tf_post_key;
            $data['tf_post_content'] = $request->tf_post_content;
            $data['tf_post_content_length'] = $length_content;
            $data['tf_post_point'] = $SEO;

            if (isset($request->file_image)) {
                $data['tf_post_image'] = $request->file_image;
            }

            if (isset($request->tf_post_id)) {
                $delete_draft = DB::table('tf_draft_post')
                                ->where('tf_draft_key', $request->tf_post_key)
                                ->where('tf_draft_url', $request->tf_post_url)->delete();

                $tf_post_id = DB::table('tf_post')
                                ->where('tf_post_id', $request->tf_post_id)
                                ->update($data);
                $new = DB::table('tf_post')
                        ->where('tf_post_author','HuyLe')
                        ->where('tf_post_id', $request->tf_post_id)->get();
            }else {
                $delete_draft = DB::table('tf_draft_post')
                                ->where('tf_draft_key', $request->tf_post_key)
                                ->where('tf_draft_url', $request->tf_post_url)->delete();

                $tf_post_id = DB::table('tf_post')->insertGetid($data);
                $new = DB::table('tf_post')
                        ->where('tf_post_author','HuyLe')
                        ->where('tf_post_id', $tf_post_id)->get();
            }
        }

        return view('tf_Admin.tf_Blog_Setting.edit_draft_post', [
            'tittle' => 'ADD DRAFT POST',
            'new' => $new,
            'SEO' => $SEO
        ])->with('name',$name);
    }

    public function delete_draft_post ($tf_draft_id) {
        $new = DB::table('tf_draft_post')
                        ->where('tf_draft_id',$tf_draft_id)->delete();

        return redirect()->route('draft_blog');
    }
}
