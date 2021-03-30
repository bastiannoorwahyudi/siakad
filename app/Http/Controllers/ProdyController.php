<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdyController extends Controller
{
    public function index()
    {
        return view ('pages.prody.index');
    }

    public function create()
    {
        return view ('pages.prody.create');
    }

    public function edit()
    {
        return view ('pages.prody.edit');
    }
}
