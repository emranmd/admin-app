<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('frontend.login.login');
    }

    public function login(Request $request){
        if($request->email == 'admin'){
            $loginArray = [
                'id' => 1,
                'username' => 'admin',
                'is_login' => true,
                'role' => 'admin',
            ];
        }

        if($request->email == 'user'){
            $loginArray = [
                'id' => 2,
                'username' => 'user',
                'is_login' => true,
                'role' => 'user',
            ];
        }

        Session()->put('login',$loginArray);
        return redirect()->route('dashboard');
    }
}

