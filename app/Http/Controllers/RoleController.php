<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Role;

class RoleController extends Controller
{
    public function index() {
        $role = Role::all();
        return view('role', ['role' => $role]);
    }
}
