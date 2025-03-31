<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Fetch all users from the database
        return view('users', ['users' => $users]);
    }
}
