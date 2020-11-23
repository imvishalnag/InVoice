<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
use App\Video;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Validator;

class PostController extends Controller
{
    public function homePage($type){
        $slider = Post::orderBy('created_at', 'DESC')->select('id', 'title', 'body', 'image', 'author', 'slug')->wherePost_type($type)->whereHp_section1('1')->limit(8)->get();
        $breaking = Post::orderBy('created_at', 'DESC')->select('id', 'title', 'body', 'image', 'author', 'slug')->wherePost_type($type)->whereBreaking('1')->limit(8)->get();
        $data = [
            'slider' => $slider,
            'breaking' => $breaking
        ];
        $response = [
            'status' => true,
            'message' => 'Posts',
            'data' => $data,
        ];
        return response()->json($response, 200);
    }
    public function categoryList()
    {
        $category = DB::table('category')->orderBy('category_name', 'asc')->get();
        $response = [
            'status' => true,
            'message' => 'Category List',
            'data' => $category,
        ];
        return response()->json($response, 200);
    }

    public function postListWithCategory($type, $category, $page)
    {
        $posts = DB::table('posts')->where('cat_id', $category)->where('post_type', $type);

        $total_rows = $posts->count();
        $total_page = ceil($total_rows / 10);
        $limit = ($page * 10) - 10;
        $posts = $posts->skip($limit)->take(10)->get();

        $response = [
            'status' => true,
            'message' => 'Post List',
            'total_page' => $total_page,
            'current_page' => $page,
            'data' => $posts,
        ];
        return response()->json($response, 200);
    }

    public function postList($id)
    {
        $posts = DB::table('posts')->where('id', $id)->first();
        $share_url = null;
        if ($posts) {
            if ($posts->post_type == '1') {
                $share_url = route('web.viewPost', ['slug' => $posts->slug, 'id' => $posts->id]);
            } else {
                $share_url = route('assamese.viewPost', ['slug' => $posts->slug, 'id' => $posts->id]);
            }
        }

        $response = [
            'status' => true,
            'message' => 'Post Details',
            'data' => $posts,
            'shareURL' => $share_url
        ];
        return response()->json($response, 200);
    }

    public function videoList($type, $page)
    {
        $video = DB::table('video')->where('type', $type)->orderBy('id', 'desc');
        $total_rows = $video->count();
        $total_page = ceil($total_rows / 10);
        $limit = ($page * 10) - 10;
        $video = $video->skip($limit)->take(10)->get();

        $response = [
            'status' => true,
            'message' => 'Video Details',
            'total_page' => $total_page,
            'current_page' => $page,
            'data' => $video,
        ];
        return response()->json($response, 200);
    }
}
