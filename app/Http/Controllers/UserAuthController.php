<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserAuthController extends Controller
{
    function login()
    {
        return view('auth.login');
    }

}
