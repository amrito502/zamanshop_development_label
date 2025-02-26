<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function users()
    {
        $users = User::where('role', '!=', 'admin')->get();
        return view('admin.users', compact('users'));
    }

    // Block a user
    public function blockUser($id)
    {
        $user = User::findOrFail($id);
        $user->update([
            'status' => 'blocked',
            'blocked_at' => now(), // Set the blocked_at timestamp
        ]);

          // Logout the user if they are logged in
    if (Auth::id() == $id) {
        Auth::logout();
        Session::flush();
    }

        return redirect()->route('admin.users')->with('success', 'User blocked successfully.');
    }


    // Unblock a user
    public function unblockUser($id)
    {
        $user = User::findOrFail($id);
        $user->update([
            'status' => 'active',
            'blocked_at' => null, // Clear the blocked_at timestamp
        ]);

        return redirect()->route('admin.users')->with('success', 'User unblocked successfully.');
    }
}
