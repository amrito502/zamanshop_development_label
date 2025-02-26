<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function adminDashboard()
    {
        // Your code for the admin dashboard goes here.
        return view('admin.dashboard');
    }
}
