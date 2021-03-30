<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view ('pages.mahasiswa.index');
    }

    public function create()
    {
        return view ('pages.mahasiswa.create');
    }

    public function edit()
    {
        return view ('pages.mahasiswa.edit');
    }
}
