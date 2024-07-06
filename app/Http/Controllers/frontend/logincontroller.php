<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Mail\DemoMail;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
// use Mail;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;


class logincontroller extends Controller
{
    public function index()
    {
        return view('frontend.login');
    }

    public function loginstart(Request $data)
    {
        $user = User::where('Email', $data->input('loginEmail'))->where('Password', $data->input('loginPassword'))->first();
        if ($user) {
            session()->put('id', $user->id);
            session()->put('mail', $user->Email);
            session()->put('name', $user->Name);
            session()->put('type', $user->type);
            session()->put('mo', $user->Mo);
            session()->put('dob', $user->DOB);
            session()->put('address', $user->Address);
            // $user = Auth::user(); // Retrieve the currently authenticated user

            // return view('frontend.home', compact('user'));
            // $data = User::all();
            // $data1 = User::where('Email', $data->input('loginEmail'))->where('Password', $data->input('loginPassword'))->where('id', 3)->first();
            return redirect('/');
            // return view('frontend.Areport')->with('data', $data);

        } else {
            return redirect('login')->with('error', 'incorrect credintials!');
        }
    }
    /*********************************************************/

    public function forget()
    {
        return view('frontend.forget');
    }
    public function mail(Request $data)
    {
        $tomail = $data->input('mail');
        $user = User::where('Email', $tomail)->first();

        $connected = @fsockopen("www.google.com", 80); // Attempt to connect to Google on port 80
        if (!$connected) {
            return redirect(route('forget'))->with('error', 'Internet not connected!');
        } else {
            fclose($connected);
        }
        if ($user) {
            session()->put('mail', $tomail);
            $otp = rand(1000, 9999);
            session()->put('otp', $otp);
            $maildata = [
                'title' => "Authentication for AwarePlus",
                'body' => "here are the one time password (OTP):",
                'otp' => $otp,
            ];
            mail::to($tomail)->send(new DemoMail($maildata));
            // return view('frontend.otp');
            return redirect(route('otp'))->with('success', 'otp send successfully!');
        } else {
            return redirect(route('forget'))->with('error', 'user not found!');
        }
    }
    /*********************************************************/


    public function indexotp()
    {
        return view('frontend.otp');
    }
    public function otp(Request $data)
    {

        $otp = session()->get('otp');
        $otp1 = $data->input('otp');
        if ($otp1 == $otp) {
            return redirect(route('newpas'))->with('success', 'varification successfull!');
        } else {
            return redirect(route('otp'))->with('error', 'Please enter valid otp');
        }
    }
    /*********************************************************/


    public function newpas()
    {
        return view('frontend.newpas');
    }
    public function change(Request $data)
    {
        $pasword = $data->input('pas');
        $cpasword = $data->input('cpas');
        $mail = session()->get('mail');
        $user = User::where('Email', $mail)->first();
        $user->Password = $pasword;
        if (!($pasword === $cpasword)) {
            return redirect(route('newpas'))->with('error', 'Password not match!');
        } else {
            if ($user->save()) {
                return redirect(route('login'))->with('success', 'Password saved successfully!');
            } else {
                return redirect(route('newpas'))->with('error', 'Password not saved!');
            }
        }
    }
}
