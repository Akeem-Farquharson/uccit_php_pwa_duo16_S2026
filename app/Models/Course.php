<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    // Define which fields can be mass assigned when creating or updating a course
    protected $fillable = [
        'code',
        'name',
        'credits',
        'pre_reqs',
        'description',
    ];
}