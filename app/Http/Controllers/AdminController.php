<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use App\Models\tf_admin;
use App\Models\tf_customer;
use Session;
use DB;

class AdminController extends Controller
{
    public function dashboard() {
        $name = Session::get('name');
        return view('tf_Admin.dashboard', [
            'tittle' => 'Trang quản trị'
        ])->with('name',$name);
    }
    
    public function logAdmin() {
        return view('logAdmin');
    }

    public function pRegAdmin(Request $request) {   

        $tf_customer = new tf_customer;
        $tf_customer->tf_customer_name = $request->tf_name;
        $tf_customer->tf_customer_email = $request->tf_email;
        $tf_customer->tf_password = Hash::make($request->tf_password);
        $tf_customer->tf_level = 2;
        $tf_customer->save();
        return redirect()->route('logAdmin');
    }

    public function regAdmin() {
        return view('regAdmin');
    }
}
