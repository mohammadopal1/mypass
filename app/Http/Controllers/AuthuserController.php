<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthuserController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view("deshbord",compact("user"));
    }
}
