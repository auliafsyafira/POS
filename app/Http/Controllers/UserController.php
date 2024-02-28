<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id, $nama) {
        return view('User')
        ->with('id', $id)
        ->with('nama', $nama);
    }
}

