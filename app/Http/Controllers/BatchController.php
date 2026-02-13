<?php

namespace App\Http\Controllers;

use App\Models\Batches;
use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    public function AddBatch(Request $req) {
        $formFields = $req->validate([
            "name" => 'required',
            "course_id" => 'required',
            "start_date" => 'required',
            "end_date" => 'required',
            "status" => 'required',
            "max_students" => 'required',
            "teacher_assigned" => 'required'
        ]);

        Batches::create($formFields);
        return back()->with('message', 'Batch Added Successfully!');
    }

    public function getRelevantBatches(Request $req) {
        $course_id= $req->query('course_id');
        $Batches= Batches::where('course_id',$course_id)->get();
        return response()->json($Batches);
    }

    public function getTeacher() {
        $teachers = User::where('role', 'teacher')->get();
        return response()->json($teachers);
    }

    // public function getMyBatches() { 
    //     $user = auth()->user();
    //   $user_id = $user->id; 
    //   $batches = Batches::where('teacher_assigned', $user_id)->get(); 
    //   return response()->json($batches); 
    // }
}
