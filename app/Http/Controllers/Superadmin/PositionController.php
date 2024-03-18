<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Position;
class PositionController extends Controller
{
    //
    public function showAllPositions(){
        $positions = Position::all();
        return view('superadmin.position', compact('positions'));
    }

    public function store(Request $request){

        $positions = new Position;
        $positions->position = $request->input('position');
        $positions->description = $request->input('description');
        $positions->isAuthorize = $request->input('isAuthorize');
        $positions->save();
        return redirect()->back()->with('status','Users added successfully');
    }
   
}
