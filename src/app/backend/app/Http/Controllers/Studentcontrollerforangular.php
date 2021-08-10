<?php
namespace App\Http\Controllers;
use App\Http\Resources\StudentCollection;
use App\Student;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class Studentcontrollerforangular extends Controller{


    public function getallstudent()
    {
        return new StudentCollection(Student::all());
    }


}
