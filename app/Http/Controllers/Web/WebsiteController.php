<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class WebsiteController extends Controller
{
    public function showHomePage(){
        $posts = DB::table('posts')->get();
        return $posts;
        // return view('web.index', compact('ami'));
    }
}
