<?php
namespace App\Http\Controllers;


use App\Student;

class Membercontroller extends Controller
{
    public function info(){
//        return 'member info';
//        return view('welcome2');
        return Student::getstudent();
    }

}
