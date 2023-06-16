<?php

namespace App\Http\Controllers;

use App\Models\basicinfo;
use App\Models\acadmicinfo;
use App\Models\batches;
use App\Models\courses;
use App\Models\sliders;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function stdata()
    {
        return view('admin.stdata');
    }



    public function data(Request  $request)
    {

        $request->validate([
            'name' => 'required',
            'cnic' => 'required',
            'qualification' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'db' => 'required',
            'title' => 'required',
            'coursefee' => 'required',
            'feestatus' => 'required',
            'startingdate' => 'required',
            'batchno' => 'required',
            'coursestatus' => 'required',

        ]);

        $table1 = new basicinfo;
        $table1->name = $request->input('name');
        $table1->cnic = $request->input('cnic');
        $table1->qualification = $request->input('qualification');
        $table1->phone = $request->input('phone');
        $table1->address = $request->input('address');
        $table1->db = $request->input('db');
        // Add any other fields from the first half of the form

        $table1->save();

        $id = $table1->id;

        $table2 = new acadmicinfo;
        $table2->basicinfo_id = $id;
        $table2->coursetitle = $request->input('title');
        $table2->coursefee = $request->input('coursefee');
        $table2->feestatus = $request->input('feestatus');
        $table2->startingdate = $request->input('startingdate');
        $table2->batchno = $request->input('batchno');
        $table2->coursestatus = $request->input('coursestatus');
        // Add any other fields from the second half of the form

        $table2->save();


        return redirect()->back()->with('message', 'Student Added Successfully');
    }
    public function addcourse()
    {
        return view('admin.addcourse');
    }


    public function uploadcourse(Request  $request)
    {
        $request->validate([

            'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm'
        ]);


        $table1 = new courses;

        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move('courseimage', $imagename);
            $table1->image = $imagename;
        }

        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $videoname = time() . '.' . $video->getClientOriginalExtension();
            $video->move('introvideos', $videoname);
            $table1->video = $videoname;
        }


        $table1->title = $request->input('title');
        $table1->category = $request->input('category');
        $table1->duration = $request->input('duration');
        $table1->pre = $request->input('pre');
        $table1->shortdescription = $request->input('shortdescription');
        $table1->fee = $request->input('fee');
        $table1->instructor = $request->input('instructor');
        $table1->status = $request->input('coursestatus');

        $table1->details = $request->input('details');


        $table1->save();

        return redirect()->back()->with('message', 'Data Added successfully.');
    }

    public function viewcourse()
    {
        $data = courses::all();
        return view('admin.courselist', compact('data'));
    }

    public function back()
    {

        return view('admin.home');
    }


    public function viewstudentdata()
    {
        $basicinfo = Basicinfo::with('acadmicinfo')->get();

        return view('admin.studentlist', compact('basicinfo'));
    }


    public function editstd($id)
    {
        $basicinfo = Basicinfo::with('acadmicinfo')->find($id);

        return view('admin.update', compact('basicinfo'));
    }

    public function updatestudent(Request  $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'cnic' => 'required',
            'qualification' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'db' => 'required',
            'title' => 'required',
            'coursefee' => 'required',
            'feestatus' => 'required',
            'startingdate' => 'required',
            'batchno' => 'required',
            'coursestatus' => 'required',

        ]);

        $table1 = basicinfo::find($id);

        $table1->name = $request->input('name');
        $table1->cnic = $request->input('cnic');
        $table1->qualification = $request->input('qualification');
        $table1->phone = $request->input('phone');
        $table1->address = $request->input('address');
        $table1->db = $request->input('db');
        // Add any other fields from the first half of the form

        $table1->save();

        $id = $table1->id;

        $table2 = acadmicinfo::find($id);
        $table2->basicinfo_id = $id;
        $table2->coursetitle = $request->input('title');
        $table2->coursefee = $request->input('coursefee');
        $table2->feestatus = $request->input('feestatus');
        $table2->startingdate = $request->input('startingdate');
        $table2->batchno = $request->input('batchno');
        $table2->coursestatus = $request->input('coursestatus');
        // Add any other fields from the second half of the form

        $table2->save();


        return redirect()->back()->with('message', 'Student Added Successfully');
    }

    public function delete($id)
    {
        $student = basicinfo::find($id);
        $student->delete();


        $acadmicinfo = acadmicinfo::where('basicinfo_id', $id);
        $acadmicinfo->delete();

        return redirect()->back()->with('message', 'Student Deleted Successfully');
    }


    public function editcourse($id)
    {
        $info = courses::find($id);

        return view('admin.editcourse', compact('info'));
    }

    public function updatecourse(Request  $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'duration' => 'required',
            'pre' => 'required',
            'fee' => 'required',
            'status' => 'required',
        ]);


        $tableX = courses::find($id);

        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move('courseimage', $imagename);
            $tableX->image = $imagename;
        }

        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $videoname = time() . '.' . $video->getClientOriginalExtension();
            $video->move('introvideos', $videoname);
            $tableX->video = $videoname;
        }


        $tableX->title = $request->input('title');
        $tableX->category = $request->input('category');
        $tableX->duration = $request->input('duration');
        $tableX->pre = $request->input('pre');
        $tableX->shortdescription = $request->input('shortdescription');
        $tableX->fee        = $request->input('fee');
        $tableX->instructor = $request->input('instructor');
        $tableX->status     = $request->input('status');

        $tableX->details = $request->input('details');


        // Add any other fields from the first half of the form

        $tableX->update();

        return redirect()->back()->with('message', 'Data Added successfully.');
    }

    public function deletecourse($id)
    {
        $student = courses::find($id);
        $student->delete();




        return redirect()->back()->with('message', 'Course Deleted Successfully');
    }
    public function edit($id)
    {
        $basicinfo = sliders::find($id);

        return view('admin.edit', compact('basicinfo'));
    }

    public function addbatches()
    {
        return view('admin.addbatches');
    }


    public function uploadbatches(Request  $request)
    {



        $table1 = new batches;



        $courseId = $request->input('course_id');

        $table1->shortdescription = $courseId;
        $table1->coursetitle = $request->input('coursetitle');
        $table1->coursetime = $request->input('coursetime');
        $table1->coursestarting = $request->input('coursestarting');
        $table1->courseending = $request->input('courseending');

        $table1->save();

        return redirect()->back()->with('message', 'Data Added successfully.');
    }
}
