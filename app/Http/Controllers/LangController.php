<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class LangController extends Controller
{

   public function changeLang(Request $request,$language)
   {
        if($language) {
       	    Session::put('language',$language);
        }
        return redirect()->back();
   } 
}
