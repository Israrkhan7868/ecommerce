<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showcategory()
    {
       $articlesinfo=category::all();
     return view('admin.showcategory',compact('articlesinfo'));
    }


    public function category()
   {
    return view('admin.createcategory');
   }

   public function uploadcategory(Request  $request){
    

    $table1 = new category;

    if ($request->hasFile('image')) {
      $image = $request->file('image');
      $imagename = time() . '.' . $image->getClientOriginalExtension();
      $image->move('categoryimage', $imagename);
      $table1->image = $imagename;
  }

    // Delete previous image
    $table1->image=$imagename;
    $table1->title = $request->input('title');
        
    $table1->parentid = $request->input('parentid');

    $table1->save();
    
    return redirect()->back()->with('message', 'Data Added successfully.');



}

public function editcategory($id)
   {
    $category=category::find($id);
    return view('admin.editcategory',compact('category'));
   }

   public function updatecategory(Request  $request, $id){
    

    $table1 =category::find($id);

    if ($request->hasFile('image')) {
      $image = $request->file('image');
      $imagename = time() . '.' . $image->getClientOriginalExtension();
      $image->move('categoryimage', $imagename);
      $table1->image = $imagename;
  }

    

    // Delete previous image
    
    $table1->title = $request->input('title');
        
    $table1->parentid = $request->input('parentid');

    $table1->save();
    
    return redirect('showcategory')->with('message', 'Data Added successfully.');



}
public function deletecategory($id) {
  $student = category::find($id);
  $student->delete();
  

  

  return redirect()->back()->with('message', 'Course Deleted Successfully');
}

}
