<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    protected $fillable=[
        'year','research_title','course_section','instructor'
        ];

        public function authors()
        {
            return $this->hasMany(Authors::class);
        }
}
