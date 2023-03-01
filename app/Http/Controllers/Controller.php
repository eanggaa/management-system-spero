<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function login(){
        return view('back.pages.authentications');
    }

    public $email, $password;

    public function postlogin(Request $request){
        $input = $request->all();
        $this->validate($request, [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8',
        ]);

        $creds = array(
            'email' => $input['email'],
            'password' => $input['password'],
        );

        if(Auth::guard('web')->attempt($creds)){
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->route('login')->with('fail', 'mdasndms dsadsad asdasdas');
        }
    }

    public function logout(){
        Auth::guard('web')->logout();
        return redirect()->route('login')->with('success', 'mdasndms. dasdadsa');
    }
}
