<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\PropertyType;
use Illuminate\Http\Request;

class PropertyTypeController extends Controller
{
    public function AllType(){

        $types = PropertyType::latest()->get();
        return view('backend.type.all_type', compact('types'));

    }//End Method


    public function AddType(){

        return view('backend.type.add_type');

    }//End Method


    public function StoreType(Request $request){

        $request->validate([

            'type_name'=>'required|unique:property_types|max:200',
            'type_icon'=>'required'

        ]);

        PropertyType::insert([

            'type_name' => $request->type_name,
            'type_icon' => $request->type_icon,

        ]);


        $notification = array(

            'message' => 'Property Type Created Successfully',
            'alert-type' => 'success'

        );

        return redirect()->route('all.type')->with($notification);

    }//End Method


    public function EditType($id){

        $types = PropertyType::findorFail($id);

        return view('backend.type.edit_type',compact('types'));

    }//End Method


    public function UpdateType(Request $request){

        $request->validate([

            'type_name'=>'required|unique:property_types|max:200',
            'type_icon'=>'required'

        ]);

        $pid = $request->id;

        PropertyType::findorFail($pid)->update([

            'type_name' => $request->type_name,
            'type_icon' => $request->type_icon,

        ]);


        $notification = array(

            'message' => 'Property Type Updated Successfully',
            'alert-type' => 'success'

        );

        return redirect()->route('all.type')->with($notification);

    }//End Method


    public function DeleteType($id){

        PropertyType::findorFail($id)->delete();

        $notification = array(

            'message' => 'Property Type Deleted Successfully',
            'alert-type' => 'success'

        );

        return redirect()->back()->with($notification);

    }//End Method
}
