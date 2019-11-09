<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Resources\StudentResource;
use App\Http\Resources\StudentResourceCollection;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends  \App\Http\Controllers\Controller
{
    /**
     * @param Student $student
     * @return StudentResource
     */
    public function show(Student $student): StudentResource
    {
        return new StudentResource($student);
    }

    /**
     * @return StudentResourceCollection
     */
    public function index(): StudentResourceCollection
    {
        return new StudentResourceCollection(Student::paginate());
    }

    /**
     * @param Request $request
     * @return StudentResource
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'    => 'required',
            'last_name'     => 'required',
            'email'         => 'required',
            'phone'         => 'required',
            'city'          => 'required',
            'branch'          => 'required',
            'DOB'          => 'required',
        ]);

        $student = Student::create($request->all());

        return new StudentResource($student);
    }

    /**
     * @param Student $student
     * @param Request $request
     * @return StudentResource
     */
    public function update(Student $student, Request $request): StudentResource
    {
        $student->update($request->all());

        return new StudentResource($student);
    }

    /**
     * @param Student $student
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return response()->json();
    }

}
