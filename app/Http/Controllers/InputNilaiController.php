<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputNilaiController extends Controller
{
    public function index()
    {
        return view ('pages.inputnilai.index');
    }

    public function create()
    {
        return view ('pages.inputnilai.create');
    }

    public function edit()
    {
        return view ('pages.inputnilai.edit');
    }
}
