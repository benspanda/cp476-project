<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    // the users that have access to the course
    public function users()
    {
        return $this->belongsToMany('App\User', 'user_x_course', 'course_id', 'user_id');
    }

    public function teacher() {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function messages() {
        return $this->hasMany('App\Messages', 'course_id');
    }
}
