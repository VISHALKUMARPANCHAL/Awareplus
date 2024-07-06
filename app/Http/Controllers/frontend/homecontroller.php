<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homecontroller extends Controller
{
    //
    public function index()
    {
        // $userid = Auth::user()->id;
        return view('frontend.home');
    }
    public function change(Request $data)
    {
        $dob = $data->input('dob');
        $mo = $data->input('mo');
        $name = $data->input('name');
        $address = $data->input('address');
        $id = $data->input('id');

        session()->put('dob', $dob);
        session()->put('mo', $mo);
        session()->put('name', $name);
        session()->put('address', $address);

        $mail = session()->get('mail');
        $user = User::where('id', $id)->first();
        $user->DOB = $dob;
        $user->Mo = $mo;
        $user->Name = $name;
        $user->Address = $address;
        $user->save();
        return redirect('/');
    }
    // public function showCurrentUser()
    // {
    //     $user = Auth::user(); // Retrieve the currently authenticated user

    //     return view('frontend.home', compact('user'));
    // }
}
