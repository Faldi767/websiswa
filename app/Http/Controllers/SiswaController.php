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

    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('siswa_edit', ['siswa' => $siswa]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        $siswa = Siswa::find($id);
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->save();
        return redirect('/siswa');
    }

    public function delete($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect('/siswa');
    }

    public function trash()
    {
        // mengampil data guru yang sudah dihapus
        $siswa = Siswa::onlyTrashed()->get();
        return view('siswa_trash', ['siswa' => $siswa]);
    }

    public function kembalikan($id)
    {
        $siswa = Siswa::onlyTrashed()->where('id',$id);
        $siswa->restore();
        return redirect('/siswa/trash');
    }

    public function kembalikan_semua()
    {
                
        $siswa = Siswa::onlyTrashed();
        $siswa->restore();
        return redirect('/siswa/trash');
    }

    public function hapuspermanen($id)
    {
        $siswa = Siswa::onlyTrashed()->where('id',$id);
        $siswa->forceDelete();
        return redirect('/siswa/trash');
    }

    public function hapuspermanen_semua()
    {
        $siswa = Siswa::onlyTrashed();
        $siswa->forceDelete();
        return redirect('/siswa/trash');
    }
}
