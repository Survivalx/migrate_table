<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;
class UserController extends Controller
{
    public function store() {
        $user = new User();

        $user->name = 'Gorgeous';
        $user->email = 'goshaz7c@icloud.com';
        $user->password = 'qwerty';
        $user->preferences = 'code sleep repeat';

        $user->save();
    }

    public function index() {
        $users = User::all();
        return response()->json($users);
    }
}
