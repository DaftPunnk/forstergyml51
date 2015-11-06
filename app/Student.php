<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * @var string
     * The database table used by the model.
     */
    //

    protected $table = 'students';

    /**
     * A Student belongs to a school
     *
     * Get the school that owns the student.
     * The name of the function is the SAME name as the table
     */

    public function school()
    {
        return $this->belongsTo('App\School');
    }
}
