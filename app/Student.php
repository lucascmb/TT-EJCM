<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'DRE', 'email', 'teacher_id'];

    public function teacher(){
    	return $this->hasOne('App\Teacher');
    }
}
