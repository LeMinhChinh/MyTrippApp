<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function homepage(){
        return view('user/home');
    }

    public function login(Request $request)
    {
        return view('user/signin');
    }

    public function register(Request $request)
    {
        return view('user/signup');
    }

    public function room(Request $request){
        return view('user/room');
    }

    public function restingplace(Request $request){
        return view('user/hotel');
    }
}
