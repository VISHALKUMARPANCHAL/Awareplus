<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logoutcontroller extends Controller
{
    public function index()
    {
        session()->forget('id');
        session()->forget('type');
        return redirect('/');
    }
}
