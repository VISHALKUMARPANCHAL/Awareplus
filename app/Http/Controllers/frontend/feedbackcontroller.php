<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class feedbackcontroller extends Controller
{
    public function index()
    {
        return view('frontend.feedback');
    }
    public function store(Request $data)
    {
        if (!session()->has('id')) {
            return redirect('/login')->with('error', 'Please Login First!');
        }
        $validator = Validator::make($data->all(), [
            'cars' => 'required',
            'fb' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('/feedback')->with('error', 'Please give input!');
        } else {
            $newdata = new feedback();
            $newdata->Problem = request('cars');
            $newdata->Feedback = request('fb');
            $newdata->range = request('vol');
            $newdata->save();
            return redirect('/feedback')->with('success', 'feedback submit successfully!');
        }
    }
    public function Admin()
    {
        $data = feedback::all();
        return view('frontend.Afeedback')->with('data', $data);
    }
}
