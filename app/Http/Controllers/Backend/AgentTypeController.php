<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AllType;
use App\Models\AgentType;

class AgentTypeController extends Controller 
{
    public function AllType(){

        $types = allType::latest()->get(); 
        return view('backend.type.all_type',compact('types'));
    }

    public function AddType(){
        $types = AllType::latest()->get();
        return view('backend.type.add_type',compact('types'));
    }

    public function StoreType(request $request ){
        // dd($request);
        $request->validate([
            'type_name' => 'required|unique:agent_type|max:200',
            'type_position' => 'required',
            'type_office' => 'required',
            'type_status' => 'required',
            'type_startdate' => 'required|date_format:Y-m-d',
            'type_salary' => 'required'
        ]);

        AllType::insert([
            'type_name' =>  $request->type_name,
            'type_position' =>  $request->type_position,
            'type_status' =>  $request->type_status,
            'type_office' =>  $request->type_office,
            'type_startdate' =>  $request->type_startdate,
            'type_salary' =>  $request->type_salary
            
        ]);
        
        $notification = array(
            'message' => 'Agent Created  Succesfully',
            'alert-type' =>'success'
        );
        return redirect()->route('all.type')->with($notification);

    }



}
