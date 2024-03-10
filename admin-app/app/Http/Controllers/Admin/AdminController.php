<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('backend.admin_activites.index');
    }
    public function basicTable(){
        return view('backend.admin_activites.basic_table');
    }

    public function addDetails(){
        return view('backend.admin_activites.add_details');
    }

}
