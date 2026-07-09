<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\OtpMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OtpController extends Controller
{
    /**
     * Show the OTP verification form.
     */
    public function show()
    {
        if (!session('otp_email')) {
            return redirect()->route('register');
        }

        return view('auth.verify-otp', ['email' => session('otp_email')]);
    }

    /**
     * Verify the submitted OTP.
     */
    public function verify(Request $request)
    {
        $request->validate([
            'otp' => 'required|digits:6',
        ]);

        $email = session('otp_email');
        $user = User::where('email', $email)->first();

        if (!$user) {
            return redirect()->route('register');
        }

        if ($user->otp_code !== $request->otp) {
            return back()->withErrors(['otp' => 'Invalid verification code.']);
        }

        if (now()->greaterThan($user->otp_expires_at)) {
            return back()->withErrors(['otp' => 'This code has expired. Please request a new one.']);
        }

        $user->update([
            'email_verified_at' => now(),
            'otp_code' => null,
            'otp_expires_at' => null,
        ]);

        session()->forget('otp_email');

        return redirect()->route('login')->with('status', 'Your email has been verified! You can now log in.');
    }

    /**
     * Resend a new OTP code.
     */
    public function resend()
    {
        $email = session('otp_email');
        $user = User::where('email', $email)->first();

        if (!$user) {
            return redirect()->route('register');
        }

        $otp = (string) rand(100000, 999999);

        $user->update([
            'otp_code' => $otp,
            'otp_expires_at' => now()->addMinutes(10),
        ]);

        Mail::to($user->email)->send(new OtpMail($otp));

        return back()->with('status', 'A new code has been sent to your email.');
    }
}