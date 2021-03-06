<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table="posts";
    protected $fillable = [
        'title',
        'description',
        'heading',
        'shortstory',
        'fullstory',
        'category_id',
        'user_id',
        'fimage',
        'status'
    ];
}
