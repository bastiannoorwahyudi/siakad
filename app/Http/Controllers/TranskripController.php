<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TranskripController extends Controller
{
    public function index()
    {
        return view ('pages.cetaktranskrip.index');
    }

    public function show()
    {
        return view ('pages.cetaktranskrip.show');
    }
}
