<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // $users = User::all();

        // $user = User::find(1);

        // dd($user->email);

        // User::create([
        //     'name' => 'User3', 
        //     'email' => 'user3@example.com', 
        //     'password' => 'CryptMePlease', 
        //     'approved' => 1]);

        //Get One to One data
        // $user = User::find(1);
        // dd($user->profile->first_name);

        $users = User::all();

        return view('admin.users', ['users' => $users]);
    }
}
