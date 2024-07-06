<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class faqcontroller extends Controller
{
    public function index()
    {
        $data = faq::all();
        return view('frontend.faq')->with('data', $data);
    }
    public function store(Request $data)
    {
        if (!session()->has('id')) {
            return redirect('/login')->with('error', 'Please Login First!');
        }
        $newdata = new faq();
        $newdata->Que = request('que');
        // $newdata->Email = $email;
        $newdata->save();
        return redirect('/faq');
    }
    public function Admin()
    {
        $data = faq::all();
        return view('frontend.Afaq')->with('data', $data);
    }
    public function Astore(Request $data, $id)
    {
        $question = faq::findOrFail($id);
        $question->Ans = $data->input('ans');
        $question->save();
        return redirect('/managefaq');
    }
}
