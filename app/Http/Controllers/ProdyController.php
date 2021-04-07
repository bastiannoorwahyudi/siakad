<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Prody;

use \Yajra\DataTables\Facades\DataTables;

class ProdyController extends Controller
{
    public function index()
    {
        if(request()->ajax())
        {
            // tampilkan data PRODY dan relasi JURUSAN
            $query = Prody::with(['jurusan']);

            return Datatables::of($query)
                ->addIndexColumn()
                ->addColumn('action', function($item) {
                    return'
                        <div class="btn">
                            <a class="btn btn-warning btn-sm" href="' . route('prody-edit', $item->id) . '">
                                Edit
                            </a>
                            <form action="' . route('prody-delete', $item->id) . '" method="post" class="d-inline">
                                ' . method_field('delete') . csrf_field() . '
                                <button type="submit" class="btn btn-danger btn-sm">
                                    Delete
                                </button>
                            </form>
                        </div>
                    ';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        // $prody = Prody::all();
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
