<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable=[
    'book_title','author','year_published','category','area_section','description','copies','book_type', 'recommendation',
    ];
}
