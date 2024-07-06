<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class outcontroller extends Controller
{
    public function index()
    {
        session()->forget('id');
        session()->forget('type');
        return redirect('/');
    }
}
