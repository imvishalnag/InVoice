<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = "video";
    protected $fillable = [
        'title',
        'author',
        'v_id',
        'thumbnail',
        'type',
        'status'
    ];
}
