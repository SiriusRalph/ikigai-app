<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function expertDashboard(){
        return view('expertDashboard');
    }

    public function adminDashboard(){
        return view('adminDashboard');
    }

    public function userDashboard(){
        return view('userDashboard');
    }

}
