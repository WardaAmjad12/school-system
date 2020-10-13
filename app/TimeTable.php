<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeTable extends Model
{
	 protected $fillable = [
        'class_name', 'section_name','teacher_name','subject_name','time',
    ];
    //
}
