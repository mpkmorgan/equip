<?php

namespace App\Http\Controllers;

use App\Models\equipment;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_equipment');
    }

    public function upload(Request $request)
    {
        $equipment=new equipment;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->file->move('equipmentimage',$imagename);

        $equipment->image=$imagename;

        $equipment->name=$request->name;
        $equipment->phone=$request->number;
        $equipment->location=$request->location;
        $equipment->rate=$request->rate;

        $equipment->save();

        return redirect()->back()->with('message','equipment added ');


    }
}
