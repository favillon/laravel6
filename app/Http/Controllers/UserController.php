<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {        
        $users = User::all();        
        $title = 'Listado de usuarios';
        return view('users.index', compact('title', 'users'));
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
}
