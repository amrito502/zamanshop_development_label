<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use App\Services\TwilioService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    protected $twilioService;

    public function __construct(TwilioService $twilioService)
    {
        $this->twilioService = $twilioService;
    }

    // ============sign_up function=========== //
    public function sign_up()
    {
        return view('authentication.register');
    }

    // ============store_sign_up function=========== //
    public function store_sign_up(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $otp = rand(100000, 999999);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'otp' => $otp,
            'otp_expires_at' => Carbon::now()->addMinutes(5),
        ]);

        $this->twilioService->sendSMS($user->phone, "Your OTP code is: $otp");
        Session::put('user_id', $user->id);
        return redirect()->route('verify.phone')->with('success', 'OTP sent to your phone.');
    }
    // ============verify_phone function=========== //
    public function verify_phone()
    {
        $userId = Session::get('user_id');
        if (!$userId) {
            return redirect()->route('sign_up')->with('error', 'Please sign up first.');
        }

        return view('authentication.verify_phone');
    }


    // ============verify_phone_store function=========== //
    public function verify_phone_store(Request $request)
    {
        $request->validate([
            'otp' => 'required|digits:6',
        ]);

        $userId = Session::get('user_id');
        $user = User::find($userId);

        if (!$user) {
            return redirect()->route('sign_up')->with('error', 'Session expired. Please register again.');
        }

        if ($user->otp_expires_at < Carbon::now()) {
            return redirect()->back()->with('error', 'OTP has expired. Please request a new one.');
        }

        if ($user->otp != $request->otp) {
            return redirect()->back()->with('error', 'Invalid OTP.');
        }

        $user->is_verified = true;
        $user->otp = null;
        $user->otp_expires_at = null;
        $user->save();

        Auth::login($user);
        Session::forget('user_id');
        return redirect()->route('customer.dashboard')->with('success', 'Phone verification successful.');
    }

    // ============resend_otp function=========== //
    public function resend_otp()
    {
        $userId = Session::get('user_id');
        $user = User::find($userId);

        if (!$user) {
            return redirect()->route('sign_up')->with('error', 'Session expired. Please register again.');
        }

        $user->otp = rand(100000, 999999);
        $user->otp_expires_at = Carbon::now()->addMinutes(5);
        $user->save();

        app(TwilioService::class)->sendSMS($user->phone, "Your new OTP code is: " . $user->otp);
        return redirect()->back()->with('success', 'A new OTP has been sent.');
    }

    // ============logout function=========== //
    public function logout(Request $request)
    {
        Auth::logout();
        Session::flush();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('sign_up')->with('success', 'You have been logged out.');
    }
}
