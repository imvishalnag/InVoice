<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use App\Admin;
use Auth;
use Hash;
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

    public function changePassword(Request $request)
    {
        $this->validate($request,[
            'user_name' => 'required|string',
            'password' => 'required|string|min:6',
        ]);
        $admin = Admin::findOrFail(Auth::guard('admin')->id());
        $admin->email = $request->input('user_name');
        $admin->password = Hash::make($request->input('password'));
        $admin->save();
        return redirect()->back()->with('message','Password Changed Successfully');
    }
}
