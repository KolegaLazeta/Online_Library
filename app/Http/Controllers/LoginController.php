<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected function authenticated(\Illuminate\Http\Request $request, $user)
    {
        if(Auth::user()->isAdmin()){
            return redirect('/admin');

        }
        else if(Auth::user()->isUser()){
            return redirect('/home');
        }
        
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
      }
}
