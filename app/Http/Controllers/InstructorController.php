<?php

namespace App\Http\Controllers;

use App\Models\instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function showinstructor()
    {
       $articlesinfo=instructor::all();
     return view('admin.showinstructor',compact('articlesinfo'));
    }


    public function instructor()
   {
    return view('admin.createinstructor');
   }

   public function uploadinstructor(Request  $request){
    

    $table1 = new instructor;

    if ($request->hasFile('image')) {
      $image = $request->file('image');
      $imagename = time() . '.' . $image->getClientOriginalExtension();
      $image->move('intructorimage', $imagename);
      $table1->image = $imagename;
  }
    // Delete previous image
    $table1->image=$imagename;
    $table1->name = $request->input('name');
    $table1->qualification = $request->input('qualification');
    $table1->email = $request->input('email');
    $table1->summary = $request->input('summary');
    
    $table1->save();
    
    return redirect()->back()->with('message', 'Data Added successfully.');



}
public function editinstructor($id)
{
  $instructor=instructor::find($id);
 return view('admin.editinstructor',compact('instructor'));
}

public function updateinstructor(Request  $request, $id){
    

  $table1 =instructor::find($id);

  if ($request->hasFile('image')) {
    $image = $request->file('image');
    $imagename = time() . '.' . $image->getClientOriginalExtension();
    $image->move('intructorimage', $imagename);
    $table1->image = $imagename;
}
  // Delete previous image
 
  $table1->name = $request->input('name');
  $table1->qualification = $request->input('qualification');
  $table1->email = $request->input('email');
  $table1->summary = $request->input('summary');
  
  $table1->save();
  
  return redirect('showinstructor')->with('message', 'Data Added successfully.');



}

public function deleteinstructor($id)
{
  $instructor=instructor::find($id);
 $instructor->delete();
 return redirect()->back();
}


}
