<?php

namespace App\Http\Controllers;

use App\Models\sliders;
use Illuminate\Http\Request;

class SliderController extends Controller
{
   public function showsliders()
   {
      $sliderinfo=sliders::all();
    return view('admin.showslider',compact('sliderinfo'));
   }


   public function sliders()
   {
    return view('admin.createslider');
   }
  

   public function uploadesliders(Request  $request){
      $request->validate([
          'title' => 'required',
          'subtitle' => 'required',
          'status' => 'required',
          'image' => 'required'
          
          
      ]);
  
  
      $table1 = new sliders;
  
      $image=$request->image;
      $imagename=time().'.'.$image->getClientOriginalExtension();
      $request->image->move('sliderimage',$imagename);
      $table1->image=$imagename;
  
      $table1->title = $request->input('title');
      $table1->subtitle = $request->input('subtitle');
      $table1->status = $request->input('status');

      $table1->save();
      
      return redirect()->back()->with('message', 'Data Added successfully.');
  
  
  
  }

  public function editsliders($id)
{
    $basicinfoo = sliders::find($id);

    return view('admin.editslider', compact('basicinfoo'));
}


public function updatesliders(Request  $request, $id){
    $request->validate([
        'title' => 'required',
        'subtitle' => 'required',
        'status' => 'required',
        'image' => 'required'
        
        
    ]);


    $table1=sliders::find($id);
    $image=$request->image;
    $imagename=time().'.'.$image->getClientOriginalExtension();
    $request->image->move('sliderimage',$imagename);

    if (file_exists(base_path().'/sliderimage/'.$table1->image)) {
        unlink(base_path().'/sliderimage/'.$table1->image);
    }

    $table1->image=$imagename;

    $table1->title = $request->input('title');
    $table1->subtitle = $request->input('subtitle');
    $table1->status = $request->input('status');

    $table1->save();
    
    return redirect()->back()->with('message', 'Data Added successfully.');



}

public function deletesliders($id) {
    $student = sliders::find($id);
    $student->delete();
    

    

    return redirect()->back()->with('message', 'Course Deleted Successfully');
}
  



}
