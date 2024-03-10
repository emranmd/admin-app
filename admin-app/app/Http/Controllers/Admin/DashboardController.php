<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $login = Session()->get('login');
        if($login['is_login'] == 1){
            if($login['role'] == 'admin'){
                return view('backend.admin_activites.dashboard');
            }else{
                return view('backend.vendor.dashboard');
            }
        }else{
            return redirect('')->route('login');
        }
    }
}
