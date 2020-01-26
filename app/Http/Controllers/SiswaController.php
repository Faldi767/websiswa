<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Siswa;

class SiswaController extends Controller
{
    public function index() {
        $siswa = Siswa::all();
        return view('siswa', ['siswa' => $siswa]);
    }

    public function tambah() {
        return view('siswa_tambah');
    }

    public function Store(Request $request) {
        $this->validate($request,[
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        Siswa::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ]);

        return redirect('/siswa');
    }
}
