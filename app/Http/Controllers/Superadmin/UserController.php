<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function showAllUsers(){
        $users = User::all();
        return view('superadmin.users', compact('users'));
    }

    public function editUser($id){
        $get = User::find($id);
        return view('superadmin.users', compact('users'));
    }

    public function store(Request $request){

        $user = new User;
        $user->fname = $request->input('fname');
        $user->lname = $request->input('lname');
        $user->email = $request->input('email');
        $user->position = $request->input('position');
        $user->role = $request->input('role');
        $user->official = $request->input('official');
        $user->password = $request->input('password');
        $user->save();
        return redirect()->back()->with('status','Users added successfully');
    }
}
