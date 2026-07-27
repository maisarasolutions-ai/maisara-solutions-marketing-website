<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rules;

class ResetPasswordController extends Controller
{
    public function showResetForm(Request $request, $token)
    {
        return view('auth.reset-password', ['token' => $token, 'email' => $request->email]);
    }

    public function reset(Request $request)
    {
        $request->validate([
            'token' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $status = Password::broker('clients')->reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($client) use ($request) {
                $client->password = Hash::make($request->password);
                $client->save();
                Auth::guard('clients')->login($client);
            }
        );

        if ($status == Password::PASSWORD_RESET) {
            return redirect()->route('home', ['locale' => app()->getLocale()])->with('status', __($status));
        }

        return back()->withInput($request->only('email'))
            ->withErrors(['email' => [__($status)]]);
    }
}
