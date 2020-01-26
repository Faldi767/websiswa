<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Role;
use App\Siswa;

class RoleSiswaController extends Controller
{
    public function index() {
        $siswa = Siswa::get();
        return view('role', ['siswa' => $siswa]);
    }
}
