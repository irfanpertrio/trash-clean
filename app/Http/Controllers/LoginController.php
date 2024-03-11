<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        } else {
            return view('login.index');
        }
    }

    //=================================================================
    //CUSTOM
    //=================================================================
    // Authenticacion
    public function auth(Request $request)
    {
        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($data)) {
            if (Auth::user()->role == 'super_admin') {
                return redirect('/super_admin/dashboard');
            }

            if (Auth::user()->role == 'admin') {
                return redirect('/admin/dashboard');
            }

            if (Auth::user()->role == 'supplier') {
                return redirect('/supplier/dashboard');
            }

            if (Auth::user()->role == 'buyer') {
                return redirect('/buyer/dashboard');
            }
        } else {
            $request->session()->flash('error', 'Username atau Password Salah!');
            return redirect('/login');
        }
    }

    //Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    //Register
    public function register()
    {
        return view('login.register');
    }
}
