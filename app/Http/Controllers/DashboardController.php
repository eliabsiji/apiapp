<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // public function index() {
    //     return view('dashboard');
    // }
    
    public function logout()
    {
       // Auth ::guard('web')->logout();
        Auth::logout(); // This will log out the currently authenticated user
        session()->flush(); // This will clear all session data
    
        return redirect('home');
    }
}
