<?php

namespace App\Http\Controllers;

use App\Models\Assignments;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function UploadAssignment(Request $req){
        $formFields = $req->validate([
            "topic" => ['min:3', 'max:50', 'string', 'required'],
            "desc" => ['min:5', 'max:500', 'string', 'required'],
            "marks" => ['min:5', 'max:100', 'integer', 'required'],
            "batch" => ['required'],
            "deadline" => ['required'],
            "type" => 'required',
            "file" => ['required', 'mimes:jpg,jpeg,docx,xls,pdf,png,txt', 'max:5048']
        ]);

        // Store file in Storage
        $formFields['file'] = $req->file('file')->store('assignment', 'public');
        Assignments::create($formFields);
    }
}
