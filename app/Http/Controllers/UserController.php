<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function show($user){
       $user = User::all();
        dd($user);
    }
}
