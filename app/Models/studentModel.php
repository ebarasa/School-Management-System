<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentModel extends Model
{
    public function myCourse(){
        return $this->hasMany('App\Models\corseModel','id','course_id');
    }
}
