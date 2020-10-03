<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminloginidx() {
        return view('admin.admin_login');
    }
    public function admindashboardidx() {
        return view('admin.admin_dashboard');
    }
}
