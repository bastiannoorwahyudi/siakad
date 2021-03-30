<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        return view ('pages.jurusan.index');
    }

    public function create()
    {
        return view ('pages.jurusan.create');
    }

    public function edit()
    {
        return view ('pages.jurusan.edit');
    }
}
