<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Post extends Model
{
    protected $table = "posts";

    protected $fillable = [
    	'title', 'body', 'image', 'cat_id', 'post_type', 'author', 'status'
    ];
    
    public function category(){
        return $this->belongsTo(Category::class, 'post_id', 'id'); 
    }
}
