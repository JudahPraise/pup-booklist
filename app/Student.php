<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //Allows mass assignment.
    protected $guarded=[];
    //For create_at and updated_at fields.
    public $timestamps=false;
}