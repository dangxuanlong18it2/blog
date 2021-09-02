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

class CustomerController extends Controller
{
    
    public function login() {
        return view('login');
    }

    public function postlogin(Request $request) {   

        $this->validate($request, [
            'tf_email' => 'required|email:filter',
            'tf_pass' => 'required'
        ]);

        $email = $request->tf_email;
        $password = $request->tf_pass;

        if(Auth::attempt(['tf_customer_email' => $email,'tf_password' =>$password])) {
            if(Auth::user()->tf_level == '1') {
                Session::put('name',Auth::user()->tf_customer_name);
                Session::flash('success', 'Bạn đã đăng nhập thành công!!');
                return redirect()->route('blog');
            } else {
                Session::put('name',Auth::user()->tf_customer_name);
                Session::flash('success', 'Bạn đã đăng nhập thành công!!');
                return redirect()->route('dashboard');
            }
        } else {
            Session::flash('error', 'Email hoặc Password không đúng!! Mời bạn vui lòng nhập lại!!');
            return redirect()->back();
        }          
    }

    public function postReg(Request $request) {   

        $tf_customer = new tf_customer;
        $tf_customer->tf_customer_name = $request->tf_name;
        $tf_customer->tf_customer_email = $request->tf_email;
        $tf_customer->tf_customer_phone = $request->tf_phone;
        $tf_customer->tf_customer_address = $request->tf_address;
        $tf_customer->tf_password = Hash::make($request->tf_password);
        $tf_customer->tf_level = 1;
        $tf_customer->save();
        return redirect()->route('login');
    }

    public function register() {
        return view('register');
    }

    public function logout() {
        Session::flush();
        return redirect()->route('blog');
    }
}
