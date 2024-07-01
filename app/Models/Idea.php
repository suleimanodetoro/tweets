<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory;

    // adding this section to allow us create db entries right in the controller definition
    protected $fillable =[
        'content',
        'likes'
    ];
}
