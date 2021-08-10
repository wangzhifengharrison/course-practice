<?php
namespace App\Http\Controllers;
use App\Student;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class Studentcontroller extends Controller{


    public function insertstudent(){
        $bool_value = DB::table('student')->insert(
            ['name'=>'imooc', 'age'=>'18', 'sex'=>'man',]
        );
        var_dump($bool_value);

    }

    # 2. 查询构造器更新数据
    public function updatestudent(){
        $num= DB::table('student')
            ->where('id',20)
            ->update(['name','wang']);
        var_dump($num);

    }

    # 3. orm查询
    public function getstudentallorm(){
        $students = Student::all();
//        dd($students);
        return $students;
    }

    # 4. orm插入数据
    public function insertstudentallorm(){
        $students = new Student();
        $students-> name = 'sean';
        $students-> age = '19';
        $students-> sex = 'man';
        $bool= $students->save();
        dd($bool);
    }

    # 4. orm插入数据
    public function insertstudentallormcrteate(){
        $student = Student::create([
            'name'=>'wu',
            'age'=>'12'
        ]);

        dd($student);
    }


}
