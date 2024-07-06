<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class reportcontroller extends Controller
{
    public function index()
    {
        return view('frontend.report');
    }
    public function store1(Request $data)
    {
        if (!session()->has('id')) {
            return redirect('/login')->with('error', 'Please Login First!');
        }
        $validator = Validator::make($data->all(), [
            'text' => 'required',
            'image' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('/report')->with('error', 'Please give input!');
        } else {
            if ($data->hasFile('image')) {

                $path = $data->file('image')->store('images');

                $image = new \App\Models\report();
                $image->desc = request('text');
                $image->path = $path;
                $image->save();
                return redirect('/report')->with('success', 'Report submit successfully!');
            } else {
                return redirect('/report');
            }
        }
    }
    public function Admin()
    {
        $data = report::all();
        return view('frontend.Areport')->with('data', $data);
    }
}
