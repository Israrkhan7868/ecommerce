<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\instructor;
use App\Models\articles;
use Illuminate\Support\Facades\Validator;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   
    public function store(Request $request)
    {
        $input = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required'],
            'address' => ['required'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ]);
        $phone = isset($input['phone']) ? $input['phone'] : null;
        $address = isset($input['address']) ? $input['address'] : null;
        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $phone,
            'address' => $address,
            'password' => Hash::make($input['password']),
        ]);
    }
    protected function passwordRules()
    {
        return ['required', 'string', 'min:8'];
    }
    
    public function instructor(Request $request)
    {

        $table1 = new instructor;
        if (!$table1) {
            return response()->json(['message' => 'Instructor not added'], 404);
        }
        $table1->name = $request->input('name');
        $table1->qualification = $request->input('qualification');
        $table1->email = $request->input('email');
        $table1->summary = $request->input('summary');
        $table1->save();
        return response()->json(['message' => 'Instructor added successfully']);

    }

    public function showinstructor()
    {
        $instructors = Instructor::all();

        return response()->json($instructors);
    }



    public function updateinstructor(Request $request, $id)
    {
        $instructor = Instructor::find($id);

        if (!$instructor) {
            return response()->json(['message' => 'Instructor not found'], 404);
        }

        $instructor->name = $request->input('name');
        $instructor->qualification = $request->input('qualification');
        $instructor->email = $request->input('email');
        $instructor->summary = $request->input('summary');

        $instructor->save();

        return response()->json(['message' => 'Instructor updated successfully']);
    }



    public function delete($id)
    {
        $instructor = Instructor::find($id);

        if (!$instructor) {
            return response()->json(['message' => 'Instructor not found'], 404);
        }

        $instructor->delete();

        return response()->json(['message' => 'Instructor deleted successfully']);
    }

    public function article(Request $request)
    {

        $table1 = new articles;
        if (!$table1) {
            return response()->json(['message' => 'Article not added'], 404);
        }
        $table1->title = $request->input('title');
        $table1->description = $request->input('description');
        $table1->status = $request->input('status');

        $table1->save();
        return response()->json(['message' => 'Article added successfully']);

    }

    public function updatearticle(Request $request,$id)
    {

        $table1 = articles::find($id);
        if (!$table1) {
            return response()->json(['message' => 'Article not added'], 404);
        }
        $table1->title = $request->input('title');
        $table1->description = $request->input('description');
        $table1->status = $request->input('status');

        $table1->save();
        return response()->json(['message' => 'Article Updated successfully']);

    }


    public function deletearticle($id)
    {
        $deletearticle = articles::find($id);

        if (!$deletearticle) {
            return response()->json(['message' => 'Article not found'], 404);
        }

        $deletearticle->delete();

        return response()->json(['message' => 'Article deleted successfully']);
    }
   
   
}
