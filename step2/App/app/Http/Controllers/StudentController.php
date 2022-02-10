<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Profile;

class StudentController extends Controller
{

    public function index(){
        $student = Student::find(1);
        dd($student->profile);
    }

    public function store()
    {
        $student = new Student;
        $student->first_name = 'Snoopy';
        $student->last_name = 'Cool';

        $student->save();

        dd($student);
    }

    public function store_profile()
    {

        $student = Student::find(1);

        $profile = new Profile;
        $profile->student_id = $student->id;
        $profile->email = 'dalelanto@gmail.com';
        $profile->phone = '7623423814';
        $profile->save();

        dd($profile);
    }
}
