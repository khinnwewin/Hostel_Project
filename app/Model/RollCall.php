<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RollCall extends Model
{
    protected $fillable = [
       'student_registers_id', 'rollno','name','date','attendance','remark'
    ];
}
