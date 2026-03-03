<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    // Show login page
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle email-only login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $user = User::where('email', $request->email)->where('approved', 1)->first();

        if($user){
            // Log the user in automatically without password
            Auth::login($user);
            return redirect('/dashboard');
        }

        return back()->with('error', 'Email not found or account not approved.');
    }
}