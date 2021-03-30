<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        return view ('pages.dosen.index');
    }

    public function create()
    {
        return view ('pages.dosen.create');
    }

    public function edit()
    {
        return view ('pages.dosen.edit');
    }
}
