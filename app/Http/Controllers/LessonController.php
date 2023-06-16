<?php

namespace App\Http\Controllers;

use App\Models\courses;
use App\Models\lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function showlesson($courseid)
{
   $articlesinfo = lesson::where('course_id', $courseid)->get();
   
   return view('admin.showlesson', compact('articlesinfo', 'courseid'));
}

         

public function lesson($courseid, $id = null)
{
    return view('admin.createlesson', compact('id', 'courseid'));
}


   public function uploadlesson(Request $request) {

$request->validate([

    'video'=>'required|mimes:mp4,ogx,oga,ogv,ogg,webm'
]);
    $lesson = new Lesson;
    
    
    // Delete previous image
    $file=$request->file('video');
    $file->move('lessonvideos',$file->getClientOriginalName());
    $file_name=$file->getClientOriginalName();
    $lesson->video =$file_name;

    $lesson->course_id = $request->input('course_id');
    $lesson->lessontitle = $request->input('lessontitle');
    $lesson->lessondetail = $request->input('lessondetail');
    $lesson->document = $request->input('document');
    
    $lesson->duration = $request->input('duration');

    $lesson->save();

    return redirect()->back()->with('message', 'Lesson added successfully.');
}



public function editlesson($id)
{
    $lesson = lesson::find($id);
    
    return view('admin.editlesson', compact('lesson'));
}

public function updatelesson(Request $request, $id) {

    $request->validate([
    
        'video'=>'required|mimes:mp4,ogx,oga,ogv,ogg,webm'
    ]);
        $lesson =Lesson::find($id);
        
        
        // Delete previous image
        $file=$request->file('video');
        $file->move('lessonvideos',$file->getClientOriginalName());
        $file_name=$file->getClientOriginalName();
        $lesson->video =$file_name;
    
        $lesson->course_id = $request->input('course_id');
        $lesson->lessontitle = $request->input('lessontitle');
        $lesson->lessondetail = $request->input('lessondetail');
        $lesson->document = $request->input('document');
        
        $lesson->duration = $request->input('duration');
    
        $lesson->save();
    
        return redirect()->back()->with('message', 'Lesson added successfully.');
    }


    public function deletelesson($id)
{
    $lesson = lesson::find($id);
    
    $lesson->delete();
    return redirect()->back();
}
    


}
