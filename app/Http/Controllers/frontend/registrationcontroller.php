<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Mail\DemoMail;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
// use App\Http\Controllers\frontend\mail;
use Illuminate\Support\Facades\Mail;


class registrationcontroller extends Controller
{
    public function index()
    {
        return view('frontend.registration');
    }
    public function tandc()
    {
        return view('frontend.tandc');
    }
    public function varifn()
    {
        return view('frontend.rotp');
    }

    public function mail(Request $data)
    {
        $connected = @fsockopen("www.google.com", 80); // Attempt to connect to Google on port 80
        if (!$connected) {
            return redirect(route('register'))->with('error', 'Internet not connected!');
        } else {
            fclose($connected);
        }
        $Name = $data->input('fullname');
        $Email = $data->input('loginEmail');
        $Mo = $data->input('monum');
        $DOB = $data->input('dob');
        $Address = $data->input('address');
        $Password = $data->input('loginPassword');
        $cPassword = $data->input('confirmPassword');
        $type = $data->input('fb');
        session()->put('Name', $Name);
        session()->put('Email', $Email);
        session()->put('Mo', $Mo);
        session()->put('DOB', $DOB);
        session()->put('Address', $Address);
        session()->put('Password', $Password);
        session()->put('type', $type);
        if ($Password == $cPassword) {
            // session()->put('mail', $Email);
            $otp = rand(1000, 9999);
            session()->put('otp', $otp);
            $maildata = [
                'title' => "Authentication for AwarePlus",
                'body' => "here are the one time password (OTP):",
                'otp' => $otp,
            ];
            mail::to($Email)->send(new DemoMail($maildata));
            return redirect(route('varifn'))->with('success', 'otp send successfully!');
        } else {
            return redirect(route('register'))->with('error', 'Password and confirm password is not same!');
        }
    }
    public function store(Request $data)
    {
        $otp = session()->get('otp');
        $Name = session()->get('Name');
        $Email = session()->get('Email');
        $Mo = session()->get('Mo');
        $DOB = session()->get('DOB');
        $Address = session()->get('Address');
        $Password = session()->get('Password');
        $type = session()->get('type');
        $otp1 = $data->input('otp');
        if ($otp1 == $otp) {
            // return redirect(route('newpas'))->with('success', 'varification successfull!');
            $newuser = new User();
            $newuser->Name = $Name;
            $newuser->Email = $Email;
            $newuser->Mo = $Mo;
            $newuser->DOB = $DOB;
            $newuser->Address = $Address;
            $newuser->Password = $Password;
            $newuser->type = $type;
            if ($newuser->save()) {
                return redirect(route("login"))->with('success', 'registration successful!');
            }
        } else {
            return redirect(route('varifn'))->with('error', 'Please enter valid otp');
        }
    }
    public function Admin()
    {
        $data = user::all();
        return view('frontend.Auser')->with('data', $data);
    }
    public function validate()
    {
        return view('frontend.validate');
    }
    public function validatepost()
    {

        // return view('frontend.validate');


        return redirect(route("login"))->with('success', 'login successful!');
    }
}
