<?php

namespace App\Http\Controllers;

use App\Models\courses;
use App\Models\stdenroll;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function services()
    {
        return view('user.services');
    }


    public function coursedetail($id)
    {
        $course=courses::find($id);
        return view('user.coursedetail',compact('course'));
    }

    public function aboutus()
    {
        return view('user.aboutus');
    }

    public function contactus()
    {
        return view('user.contactus');
    }

    public function stdenroll(Request $request)
{
    
        $this->validate($request, [
        
            'phone' => 'required|regex:/^[0-9]{11}$/',
        ], [
            'phone.regex' => 'Please enter a valid 11-digit phone number.',
        ]);
        
        // process form data
        $table = new stdenroll;
        $table->name = $request->input('name');
        $table->email = $request->input('email');
        $table->phone = $request->input('phone');
        $table->batch = $request->input('batch');
        $table->coursetitle = $request->input('coursetitle');
        if(Auth::id()){
            $table->endingdate=Auth::user()->id;
        }

        $table->save();
    
        return redirect()->back()->with('message', 'Data added we will contact with you soon...');
    
     
}

public function studentenroll()
{
    return view('user.studentenrollment');
}
public function mycourses()
{
    if(Auth::id()){
        $userid=Auth::user()->id;
        $enrollment=stdenroll::where('endingdate',$userid)->get();

        return view('user.studentenrollment',compact('enrollment'));

    }
}
public function searchuser(Request $request)
{
    $id = $request->input('id');

    $user = User::where('id', $id)->first();

    if ($user) {
        // User found, return the user data
        return view('user.show', ['user' => $user]);
    } else {
        // User not found, return an error message or handle it accordingly
        return back()->with('error', 'User not found.');
    }
}




}
