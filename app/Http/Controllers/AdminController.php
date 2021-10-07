<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $users= User::all();
        
        return view('admin.users', compact('users'));
    
    }

    public function create(){
        return view('admin.create');
    }
}
