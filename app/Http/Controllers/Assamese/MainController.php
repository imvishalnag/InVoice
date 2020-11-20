<?php

namespace App\Http\Controllers\Assamese;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Category;
use App\Post;
use App\Http\Resources\Category as CategoryResource;
use Illuminate\Support\Str;

class MainController extends Controller
{
     public function frontPagePost()
    {

        $slide_post = DB::table('posts')
            ->select('posts.*', 'category.as_category_name as category_name')
            ->join('category','posts.cat_id','=','category.id')
            ->where('posts.hp_section1', 1)
            ->where('posts.post_type', 2)
            ->get();

        $four_post = DB::table('posts')
            ->select('posts.*', 'category.as_category_name as category_name')
            ->join('category','posts.cat_id','=','category.id')
            ->where('posts.hp_section1', 2)
            ->where('posts.post_type', 2)
            ->take(4)
            ->get();

        $slider_post = NULL;
        if(count($slide_post) > 0){
            $slider_post = $slide_post;
        }else{
            $slider_post = DB::table('posts')
            ->select('posts.*', 'category.as_category_name as category_name')
            ->join('category','posts.cat_id','=','category.id')
            ->where('posts.post_type', 2)
            ->take(5)
            ->get();
        }
        
        $fourth_post = NULL;
        if(count($four_post) >= 4){
            $fourth_post = $four_post;
        }else{
            $fourth_post = DB::table('posts')
            ->select('posts.*', 'category.as_category_name as category_name')
            ->join('category','posts.cat_id','=','category.id')
            ->where('posts.post_type', 2)
            ->where('posts.hp_section1', '!=', 1)
            ->take(4)
            ->get();
        }

        $assam_post = DB::table('posts')
            ->select('posts.*', 'category.as_category_name as category_name')
            ->join('category','posts.cat_id','=','category.id')
            ->where('posts.post_type', 2)
            ->where('posts.cat_id', 1)
            ->orderBy('posts.id','desc')
            ->take(5)
            ->get();

        $assam_cat_name = DB::table('category')->where('id',1)->first();
        $assam_cat_name = $assam_cat_name->as_category_name;

        $guwahati_post = DB::table('posts')
            ->select('posts.*', 'category.category_name as category_name')
            ->join('category','posts.cat_id','=','category.id')
            ->where('posts.post_type', 2)
            ->where('posts.cat_id', 2)
            ->orderBy('posts.id','desc')
            ->take(5)
            ->get();

        $guwahati_cat_name = DB::table('category')->where('id',2)->first();
        $guwahati_cat_name = $guwahati_cat_name->as_category_name;

        $technology_post = DB::table('posts')
            ->select('posts.*', 'category.category_name as category_name')
            ->join('category','posts.cat_id','=','category.id')
            ->where('posts.post_type', 2)
            ->where('posts.cat_id', 5)
            ->orderBy('posts.id','desc')
            ->take(5)
            ->get();

        $technology_cat_name = DB::table('category')->where('id',5)->first();
        $technology_cat_name = $technology_cat_name->as_category_name;

        //Business Section
        $business_posts = Post::where('cat_id', 6)
            ->select('posts.*','category.category_name as category_name')
            ->join('category','posts.cat_id','category.id')
            ->where('posts.post_type', 2)
            ->take(8)
            ->orderBy('posts.id', 'desc')
            ->get();

        $lifestyle_posts = Post::where('cat_id', 7)
                ->select('posts.*', 'category.category_name as category_name')
                ->join('category','posts.cat_id','category.id')
                ->where('posts.post_type', 2)
                ->take(2)
                ->orderBy('posts.id', 'desc')
                ->get();

        $lifestyle_1 = DB::table('posts')
                ->select('posts.*', 'category.as_category_name as category_name')
                ->join('category','posts.cat_id','=','category.id')
                ->where('posts.post_type', 2)
                ->where('posts.cat_id', 7)
                ->orderBy('posts.id','desc')
                ->take(5)
                ->get();

        $lifestyle_2 = DB::table('posts')
                ->select('posts.*', 'category.as_category_name as category_name')
                ->join('category','posts.cat_id','=','category.id')
                ->where('posts.post_type', 2)
                ->where('posts.cat_id', 7)
                ->orderBy('posts.id','asc')
                ->take(5)
                ->get();

        $lifestyle_cat_name = DB::table('category')->where('id',7)->first();
        $lifestyle_cat_name = $lifestyle_cat_name->as_category_name;

        //Health Gadget Travel Section
        $health = DB::table('posts')
        ->select('posts.*', 'category.as_category_name as category_name')
        ->join('category','posts.cat_id','=','category.id')
        ->where('posts.post_type', 2)
        ->where('posts.cat_id', 8)
        ->orderBy('posts.id','asc')
        ->take(4)
        ->get();

        $health_cat_name = DB::table('category')->where('id',8)->first();
        $health_cat_name = $health_cat_name->as_category_name;

        $gadget = DB::table('posts')
                ->select('posts.*', 'category.as_category_name as category_name')
                ->join('category','posts.cat_id','=','category.id')
                ->where('posts.post_type', 2)
                ->where('posts.cat_id', 9)
                ->orderBy('posts.id','asc')
                ->take(4)
                ->get();
        $gadget_cat_name = DB::table('category')->where('id',9)->first();
        $gadget_cat_name = $gadget_cat_name->as_category_name;

        $travel = DB::table('posts')
                ->select('posts.*', 'category.as_category_name as category_name')
                ->join('category','posts.cat_id','=','category.id')
                ->where('posts.post_type', 2)
                ->where('posts.cat_id', 10)
                ->orderBy('posts.id','asc')
                ->take(4)
                ->get();
        $travel_cat_name = DB::table('category')->where('id',10)->first();
        $travel_cat_name = $travel_cat_name->as_category_name;
        //Business Sections
        $business_posts_1 = DB::table('posts')
        ->select('posts.*', 'category.as_category_name as category_name')
        ->join('category','posts.cat_id','=','category.id')
        ->where('posts.post_type', 2)
        ->where('posts.cat_id', 6)
        ->orderBy('posts.id','desc')
        ->take(4)
        ->get();

        $business_posts_2 = DB::table('posts')
            ->select('posts.*', 'category.as_category_name as category_name')
            ->join('category','posts.cat_id','=','category.id')
            ->where('posts.post_type', 2)
            ->where('posts.cat_id', 6)
            ->orderBy('posts.id','asc')
            ->take(4)
            ->get();

         //Popular Post
        $popular_post = DB::table('posts')
         ->select('posts.*', 'category.category_name as category_name')
         ->join('category','posts.cat_id','=','category.id')
         ->where('popular_post', 1)
         ->where('posts.post_type', 2)
         ->orderBy('posts.id','asc')
         ->take(5)
         ->get();   

        return view('as.index', compact('slider_post', 'fourth_post','assam_post','assam_cat_name',
         'guwahati_post', 'guwahati_cat_name', 'technology_post', 'technology_cat_name', 'lifestyle_1', 
         'lifestyle_cat_name', 'lifestyle_2', 'health', 'health_cat_name', 'gadget', 'gadget_cat_name', 
         'travel', 'travel_cat_name', 'business_posts_1', 'business_posts_2', 'popular_post'));

    }

    public function showPost($slug, $id){
        $single_post = DB::table('posts')
            ->select('posts.*', 'category.as_category_name as category_name')
            ->join('category','posts.cat_id','=','category.id')
            ->where('posts.id', $id)
            ->first();
    
            //Related Post
            $posts = DB::table('posts')->where('id',$id)->first();
            $related_post = DB::table('posts')->where('cat_id', $posts->cat_id)->where('post_type', 2)
            ->get();

            //Popular Post
            $popular_post = DB::table('posts')
            ->select('posts.*', 'category.category_name as category_name')
            ->join('category','posts.cat_id','=','category.id')
            ->where('popular_post', 1)
            ->where('posts.post_type', 2)
            ->orderBy('posts.id','asc')
            ->take(5)
            ->get();   

            // dd($related_post);
            return view('as.show', compact('single_post', 'related_post', 'popular_post'));
        }

        //Header Navigation
    public function headerNav($id){
        try {
            $id = decrypt($id);
        }catch(DecryptException $e) {
            return redirect()->back();
        }
        $news = DB::table('posts')->where('cat_id', $id)->where('post_type', 2)->get();

        $cat_name = DB::table('category')->where('id',$id)->first();
        $cat_name = $cat_name->as_category_name;
        return view('as.news.news-list', compact('news', 'cat_name'));
    }

    public function search(Request $request){
        $this->validate($request, [
            'query' => 'required'
        ]);

        $query = $request->input('query');

        $search_result = DB::table('posts')
            ->where('title', 'LIKE', '%'.$query.'%')
            ->where('post_type', 2)
            ->orWhere('body', 'LIKE', '%'.$query.'%')
            ->get();
        return view('as.search.search-list', compact('search_result'));
    }
}
