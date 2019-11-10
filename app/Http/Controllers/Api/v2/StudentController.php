<?php

namespace App\Http\Controllers\Api\v2;

use App\Http\Resources\v2\StudentResource;
use App\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function show(Student $student): StudentResource
    {
        return new StudentResource($student);
    }
}
