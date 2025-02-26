<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CustomerDashboardController extends Controller
{
    public function customerDashboard(){
        if (!Auth::check()) {
            return redirect()->route('sign_up')->with('error', 'Please sign up first.');
        }

        if (!Auth::user()->is_verified) {
            return redirect()->route('verify.phone')->with('error', 'You need to verify your phone first.');
        }

        return view('customer.dashboard');
    }
}
