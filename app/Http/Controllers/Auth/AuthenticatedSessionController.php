<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Mail\OtpMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        /** @var \App\Models\User $user */
          $user = Auth::user();

        if (!$user->email_verified_at) {
            Auth::logout();

            $otp = (string) rand(100000, 999999);

            $user->update([
                'otp_code' => $otp,
                'otp_expires_at' => now()->addMinutes(5),
            ]);

            Mail::to($user->email)->send(new OtpMail($otp));

            session(['otp_email' => $user->email]);

            return redirect()->route('otp.verify')
                ->with('status', 'Please verify your email first. We sent a new code to your inbox.');
        }

        $request->session()->regenerate();

        return redirect()->intended(route('home', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}