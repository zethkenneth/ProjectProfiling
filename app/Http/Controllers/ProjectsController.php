<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        return view('admin.project.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $datadepartment = department::all();
        $dataposition = position::all();
        return view('employees.create', [
            'departments' => $datadepartment,
            'positions' => $dataposition
        ]);
    }
}
