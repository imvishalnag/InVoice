<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index(){
        $post = Post::count();
        $eng_post = Post::wherePost_type(1)->count();
        $ass_post = Post::wherePost_type(2)->count();
        $category = Category::count();
        $all_post = Post::latest()->paginate(15);
        return view('admin.dashboard', compact('post', 'eng_post', 'ass_post', 'category', 'all_post'));
    }
}
