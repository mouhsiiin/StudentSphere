<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validate email and password
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Attempt login
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $role = $user->role;

            // Redirect based on role
            $redirectTo = match ($role) {
                'student' => '/student/dashboard',
                'prof_res_module' => '/profResModule/dashboard',
                'vice_doyan'  =>  '/viceDoyan/dashboard',
                'res_filiere'  =>  '/Resfiliere/dashboard',
                'chef_dep'  =>  '/chefDep/dashboard',
                default => '/', // Redirect to home if role doesn't match
            };

            return redirect()->intended($redirectTo);
        }

        // Redirect back with error message if login fails
        return redirect('/')->withErrors(['message' => 'Invalid email or password']);
    }
    
}
