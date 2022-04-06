<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssigningProjectController extends Controller
{
    public function index()
    {
        return view('admin.assigningproject.index');
    }
}
