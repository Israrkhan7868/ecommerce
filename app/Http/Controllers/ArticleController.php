<?php

namespace App\Http\Controllers;

use App\Models\articles;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ArticleController extends Controller
{
    public function showarticles()
   {
      $articlesinfo=articles::all();
    return view('admin.showarticles',compact('articlesinfo'));
   }


   public function articles()
   {
    return view('admin.createarticles');
   }
  



   public function uploadearticles(Request  $request){
    $request->validate([
        'title' => 'required',
       
        'slug' => 'required',
        'status' => 'required',
        'image' => 'required'
        
        
    ]);


    $table1 = new articles;

    $image=$request->image;
    $imagename=time().'.'.$image->getClientoriginalExtension();
    $request->image->move('articlesimage',$imagename);
    $table1->image=$imagename;

    $table1->title = $request->input('title');
    $table1->description = $request->input('description');
    $table1->slug = $request['slug'] = Str::slug($request->slug,'-');
    $table1->status = $request->input('status');

    $table1->save();
    
    return redirect()->back()->with('message', 'Data Added successfully.');



}


public function editarticles($id)
{
    $articleinfo = articles::find($id);

    return view('admin.editarticles', compact('articleinfo'));
}


public function updatearticle(Request  $request , $id){
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'slug' => 'required',
        'status' => 'required',
        'image' => 'required'
    ]);

    $table1 =articles::find($id);

    $image=$request->image;
    $imagename=time().'.'.$image->getClientOriginalExtension();
    $request->image->move('articlesimage',$imagename);

    // Delete previous image
    if (file_exists(base_path().'/articlesimage/'.$table1->image)) {
        unlink(base_path().'/articlesimage/'.$table1->image);
    }

    $table1->image=$imagename;
    $table1->title = $request->input('title');
    $table1->description = $request->input('description');
    $table1->slug = $request['slug'] = Str::slug($request->slug,'-');
    $table1->status = $request->input('status');
    $table1->save();

    return redirect()->back()->with('message', 'Data Added successfully.');
}


public function deletearticle($id) {
    $student = articles::find($id);
    $student->delete();
    

    

    return redirect()->back()->with('message', 'Course Deleted Successfully');
}
  

}
