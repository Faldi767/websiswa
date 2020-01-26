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
}