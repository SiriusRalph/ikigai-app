<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function expertDashboard(){
        return view('experts.expertDashboard');
    }

    public function adminDashboard(){
        return view('admin.adminDashboard');
    }

    public function userDashboard(){
        return view('user.userDashboard');
    }

}
