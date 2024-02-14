<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function show(){
        return view('superadmin.users');
    }

    public function store(Request $request){

        $user = new User;
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $email = $request->input('email');
        $position = $request->input('position');
        $role = $request->input('role');
        $official = $request->input('official');
        $password = $request->input('password');

        return redirect()->back()->with('status','Users added successfully');
    }
}
