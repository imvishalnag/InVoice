<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
class Category extends Model
{
    protected $table = "category";

    protected $fillable = ['category_name'];

    public function posts()
    {
        return $this->hasMany(Post::class, 'cat_id', 'id')->take(4);
    }
}
