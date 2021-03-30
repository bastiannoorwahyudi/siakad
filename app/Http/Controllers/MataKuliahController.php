<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index()
    {
        return view ('pages.mataKuliah.index');
    }

    public function create()
    {
        return view ('pages.mataKuliah.create');
    }

    public function edit()
    {
        return view ('pages.mataKuliah.edit');
    }
}
