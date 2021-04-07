<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Jurusan;

class JurusanController extends Controller
{
    public function index()
    {
        $data_jurusan = \App\Models\Jurusan::all();
        return view ('pages.jurusan.index', compact('data_jurusan'));
    }

    public function create()
    {
        return view ('pages.jurusan.create');
    }

    public function store(Request $request)
    {
        // membuat validasi & melakukan penyimpanan
        $request->validate([
            'KodeJurusan' => 'required',
            'NamaJurusan' => 'required'
        ]);

        $data = $request->all(); //tangkap semua data yang ada di form

        Jurusan::create($data); //gunakan Function Create untuk simpan sesuai dengan $data yang ditangkap
        return redirect()->route('jurusan')->with('status', 'Data Jurusan Berhasil Ditambahkan!');
    }

    public function edit($id)
    {
        $jurusan = Jurusan::find($id);
        return view ('pages.jurusan.edit', compact('jurusan'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $jurusan = Jurusan::findOrFail($id);
        $jurusan->update($data);

        return redirect()->route('jurusan')->with('status', 'Data Jurusan Berhasil Diupdate!');
    }

    public function destroy($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        $jurusan->delete();

        return redirect()->route('jurusan')->with('status', 'Data Jurusan Berhasil Dihapus!');
    }
}
