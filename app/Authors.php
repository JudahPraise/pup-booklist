<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    protected $fillable=[
        'research_id','name'
        ];

        public function research() //pangalan nung research na table 
        {
            return $this->belongsTo(Research::class); //Pangalan nung research na model
        }
}

