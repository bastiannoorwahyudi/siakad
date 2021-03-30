<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TahunAkademikController extends Controller
{
    public function index()
    {
        return view ('pages.tahunAkademik.index');
    }

    public function create()
    {
        return view ('pages.tahunAkademik.create');
    }

    public function edit()
    {
        return view ('pages.tahunAkademik.edit');
    }
}
