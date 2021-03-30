<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KhsController extends Controller
{
    public function index()
    {
        return view('pages.khs.index');
    }

    public function create()
    {
        return view('pages.khs.create');
    }
}
