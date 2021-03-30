<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KrsController extends Controller
{
    public function index()
    {
        return view('pages.krs.index');
    }

    public function create()
    {
        return view('pages.krs.create');
    }
}
