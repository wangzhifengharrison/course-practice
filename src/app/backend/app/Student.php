<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model{

    #指定表名， 默认ID为primarykey
    protected $table = 'student';
    protected $primaryKey ='id';
    # 允许批量给值
    protected $fillable =['name','age'];
}
