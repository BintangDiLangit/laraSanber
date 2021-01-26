<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form()
    {
        return view('register');
    }
    public function wlcm(Request $request)
    {
        // dd($request->all());
        $first = $request["fName"];
        $last = $request["lName"];
        return view('welcome')->with('first', $first)->with('last', $last);
    }
}
