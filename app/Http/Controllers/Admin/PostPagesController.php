<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use App\Post;
use DataTables;
use File;
use Illuminate\Support\Str;
class PostPagesController extends Controller
{
    public function createPost(){
        $categorys = DB::table('category')->get();
        return view('admin.create_post', compact('categorys'));
    }

    public function addPost(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'type' => 'required',
            'author' => 'required',
            'category' => 'required',
            'body' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $title = $request->input('title');
        $type = $request->input('type');
        $body = $request->input('body');
        $author = $request->input('author');
        $category = $request->input('category');
       
        $slug = NULL;
        $type == 1 ? $slug = Str::slug($title) : $slug = $this->makeSlug($title);

        if($request->hasfile('image'))
        {
            $image = $request->file('image');
            $destination = base_path().'/public/post/';
            $image_extension = $image->getClientOriginalExtension();
            $image_name = md5(date('now').time()).".".$image_extension;
            $original_path = $destination.$image_name;
            Image::make($image)->save($original_path);
            $thumb_path = base_path().'/public/post/thumb/'.$image_name;
            Image::make($image)
            ->resize(300, 400)
            ->save($thumb_path);
        }

        $post_insert = DB::table('posts')
                        ->insertGetId([
                            'title' => $title,
                            'body' => $body,
                            'image' => $image_name,
                            'cat_id' => $category,
                            'post_type' => $type,
                            'author' => $author,
                            'slug' => $slug,
                            'created_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
                        ]);

        if($post_insert){
            
            return redirect()->back()->with('message','Post Added Successfully');
        }else{
             return redirect()->back()->with('error','Something Went Wrong Please Try Again');
        } 

    }

    public function listPost(){
        return view('admin.list_post');
    }

    public function assListPost(){
        return view('admin.ass_list_post');
    }

    public function ajaxGetPostList(){
        $query = DB::table('posts')
            ->select('posts.*','category.category_name as c_name')
            ->join('category','posts.cat_id','=','category.id')
            ->where('posts.post_type', 1)
            ->orderBy('posts.id','desc');

        $slide_post = DB::table('posts')
            ->select('posts.*', 'category.category_name as category_name')
            ->join('category','posts.cat_id','=','category.id')
            ->where('posts.hp_section1', 1)
            ->where('posts.post_type', 1)
            ->get();

        $slider_count = count($slide_post);
        return datatables()->of($query->get())
        ->addIndexColumn()
        ->addColumn('category', function($row){
            $btn = '<a href="#" class="btn btn-primary btn-sm">'.$row->c_name.'</a>';
            return $btn;
        })
        ->addColumn('action', function($row){
               $btn = '
               <a href="'.route('admin.post_view', [encrypt($row->id)]).'" class="btn btn-info btn-sm" target="_blank">View</a>
               <a href="'.route('admin.post_edit', [encrypt($row->id)]).'" class="btn btn-warning btn-sm">Edit</a>              
               ';
               if ($row->status == '1') {
                   $btn .= '<a href="'.route('admin.post_status', ['id' => encrypt($row->id), 'status' => encrypt(2)]).'" class="btn btn-danger btn-sm">Unpublish</a>';
                    return $btn;
                }else{
                   $btn .= '<a href="'.route('admin.post_status', ['id' => encrypt($row->id), 'status' => encrypt(1)]).'" class="btn btn-success btn-sm">Publish</a>';
                    return $btn;
                }
                return $btn;
        })
        ->addColumn('section', function($row){
            if($row->hp_section1 == 1){
                    $btn = '<a href="'.route('admin.post_slide', ['id' => encrypt($row->id), 'slide' => encrypt(3)]).'" class="btn btn-danger">Unslide</a>';
            }
            else if($row->hp_section1 == 2){
                $btn = '<a href="'.route('admin.post_four', ['id' => encrypt($row->id), 'four' => encrypt(3)]).'" class="btn btn-danger">UnFour</a>';
            }else if($row->popular_post == 1){
                $btn = '<a href="'.route('admin.popular_post', ['id' => encrypt($row->id), 'popular' => encrypt(2)]).'" class="btn btn-danger">Unpopular</a>';
            }
            else{
                $btn = '<a href="'.route('admin.post_slide', ['id' => encrypt($row->id), 'slide' => encrypt(1)]).'" class="btn btn-info">Slide</a>
                        <a href="'.route('admin.post_four', ['id' => encrypt($row->id), 'four' => encrypt(2)]).'" class="btn btn-info">Four</a>
                        <a href="'.route('admin.popular_post', ['id' => encrypt($row->id), 'popular' => encrypt(1)]).'" class="btn btn-info">Popular</a>';
            }
            return $btn;
        })
        ->rawColumns(['category','action', 'section'])
        ->make(true);
    }

    public function ajaxGetAssPostList(){
        $query = DB::table('posts')
        ->select('posts.*','category.as_category_name as c_name')
        ->join('category','posts.cat_id','=','category.id')
        ->where('posts.post_type', 2)
        ->orderBy('posts.id','desc');
        return datatables()->of($query->get())
        ->addIndexColumn()
        ->addColumn('title', function($row){
            $title = Str::words($row->title, 3, ' ...');
            return $title;
        })
        ->addColumn('category', function($row){
            $btn = '<a href="#" class="btn btn-primary btn-sm">'.$row->c_name.'</a>';
            return $btn;
        })
        ->addColumn('action', function($row){
               $btn = '
               <a href="'.route('admin.post_view', [encrypt($row->id)]).'" class="btn btn-info btn-sm" target="_blank">View</a>
               <a href="'.route('admin.post_edit', [encrypt($row->id)]).'" class="btn btn-warning btn-sm">Edit</a>              
               ';
               if ($row->status == '1') {
                   $btn .= '<a href="'.route('admin.post_status', ['id' => encrypt($row->id), 'status' => encrypt(2)]).'" class="btn btn-danger btn-sm">Unpublish</a>';
                    return $btn;
                }else{
                   $btn .= '<a href="'.route('admin.post_status', ['id' => encrypt($row->id), 'status' => encrypt(1)]).'" class="btn btn-success btn-sm">Publish</a>';
                    return $btn;
                }
                return $btn;
        })
        ->addColumn('section', function($row){
            if($row->hp_section1 == 1){
                $btn = '<a href="'.route('admin.post_slide', ['id' => encrypt($row->id), 'slide' => encrypt(3)]).'" class="btn btn-danger">Unslide</a>';
            }
            else if($row->hp_section1 == 2){
                $btn = '<a href="'.route('admin.post_four', ['id' => encrypt($row->id), 'four' => encrypt(3)]).'" class="btn btn-danger">UnFour</a>';
            }else if($row->popular_post == 1){
                $btn = '<a href="'.route('admin.popular_post', ['id' => encrypt($row->id), 'popular' => encrypt(2)]).'" class="btn btn-danger">Unpopular</a>';
            }
            else{
                $btn = '<a href="'.route('admin.post_slide', ['id' => encrypt($row->id), 'slide' => encrypt(1)]).'" class="btn btn-info">Slide</a>
                        <a href="'.route('admin.post_four', ['id' => encrypt($row->id), 'four' => encrypt(2)]).'" class="btn btn-info">Four</a>
                        <a href="'.route('admin.popular_post', ['id' => encrypt($row->id), 'popular' => encrypt(1)]).'" class="btn btn-info">Popular</a>';
            }
            return $btn;
        })
        ->rawColumns(['title', 'category','action', 'section'])
        ->make(true);
    }

    public function GetPostSinglePost($post_id){
        try {
            $id = decrypt($post_id);
        }catch(DecryptException $e) {
            return redirect()->back();
        }

        $single_post = DB::table('posts')
            ->join('category', 'posts.cat_id', '=', 'category.id')
            ->select('posts.*', 'category.category_name as c_name')
            ->where('posts.id', $id)
            ->first();
        return view('admin.view_post', compact('single_post'));
    }

    public function ckEditorImageUpload(Request $request){
        if($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();
       
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
       
            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();
       
            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;
       
            //Upload File
            // $request->file('upload')->storeAs('assets/category/ckeditor/', $filenametostore);

            $request->file('upload')->move(public_path('assets/ckeditor'), $filenametostore);
     
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('assets/ckeditor/'.$filenametostore); 
            $msg = 'Image successfully uploaded'; 
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
              
            // Render HTML output 
            @header('Content-type: text/html; charset=utf-8'); 
            echo $re;
        }
    }

    public function statusPost( $postId, $statusId){
        try {
            $id = decrypt($postId);
            $sId = decrypt($statusId);
        }catch(DecryptException $e) {
            return redirect()->back();
        }
        $post_update = DB::table('posts')
            ->where('id', $id)
            ->update([
                'status' => $sId,
                'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString()
            ]);

            if($post_update){
                return redirect()->back()->with('message','Post Updated Successfully');
            }else{
                 return redirect()->back()->with('error','Something Went Wrong Please Try Again');
            } 
    
    }

    public function editPost($postId){
        try {
            $id = decrypt($postId);
        }catch(DecryptException $e) {
            return redirect()->back();
        }
        $posts = DB::table('posts')->where('id', $id)->first();
        $categorys = DB::table('category')->get();
        return view('admin.edit_post', compact('posts', 'categorys'));
    }

    public function updatePost(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'type' => 'required',
            'author' => 'required',
            'category' => 'required',
            'body' => 'required'
        ]);
        
        $title = $request->input('title');
        $type = $request->input('type');
        $body = $request->input('body');
        $author = $request->input('author');
        $category = $request->input('category');
        $slug = NULL;
        $type == 1 ? $slug = Str::slug($title) : $slug = $this->makeSlug($title);
        $id = $request->input('postId');
        if($request->hasfile('image'))
        {
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
            $image = $request->file('image');
            $destination = base_path().'/public/post/';
            $image_extension = $image->getClientOriginalExtension();
            $image_name = md5(date('now').time()).".".$image_extension;
            $original_path = $destination.$image_name;
            Image::make($image)->save($original_path);
            $thumb_path = base_path().'/public/post/thumb/'.$image_name;
            Image::make($image)
            ->resize(300, 400)
            ->save($thumb_path);
            
            // Check wheather image is in DB
            $checkImage = DB::table('posts')->where('id', $id)->first();
            if($checkImage->image){
                //Delete
                $image_path = "posts/thumb/".$checkImage->image;  
                if(File::exists($image_path)) {
                    File::delete($image_path);
                }

                //Update
                $image_update = DB::table('posts')
                ->where('id', $id)
                ->update([
                    'image' => $image_name,
                    'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString()
                ]);   

                if($image_update){
                        return redirect()->back()->with('message','Post Updated Successfully!');
                    }else{
                        return redirect()->back()->with('error','Something Went Wrong Please Try Again');
                    } 
            }else{
                 //Update
                 $image_update = DB::table('posts')
                 ->where('id', $id)
                 ->update([
                     'image' => $image_name,
                     'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString()
                 ]);   
                
                if($image_update){
                        return redirect()->back()->with('message','Post Updated Successfully!');
                    }else{
                        return redirect()->back()->with('error','Something Went Wrong Please Try Again');
                    } 
            }
        }
        
        $post_update = DB::table('posts')
                        ->where('id', $id)
                        ->update([
                            'title' => $title,
                            'body' => $body,
                            'cat_id' => $category,
                            'post_type' => $type,
                            'author' => $author,
                            'slug' => $slug,
                            'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
                        ]);

        if($post_update){
            
            return redirect()->back()->with('message','Post Updated Successfully!');
        }else{
             return redirect()->back()->with('error','Something Went Wrong Please Try Again');
        } 


    }

    public function updateSlide($postId, $slideId){
        try {
            $id = decrypt($postId);
            $sId = decrypt($slideId);
        }catch(DecryptException $e) {
            return redirect()->back();
        }

        $slide_update = DB::table('posts')
            ->where('id', $id)
            ->update([
                'hp_section1' => $sId,
                'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString()
            ]);

        if($slide_update){
            return redirect()->back()->with('message','Slide Updated Successfully!');
        }else{
            return redirect()->back()->with('error','Something Went Wrong Please Try Again');
        } 
    }
    public function listSlidePage(){
        return view('admin.list_slide');
    }

    public function ajaxGetPostSliderList(){
        $query = DB::table('posts')
        ->where('hp_section1', 1)
        ->select('posts.*','category.category_name as c_name', 'category.as_category_name as as_category_name')
        ->join('category','posts.cat_id','=','category.id')
        ->orderBy('posts.id','desc');
        return datatables()->of($query->get())
        ->addIndexColumn()
        ->addColumn('category', function($row){
            if($row->post_type == 1){
                $btn = '<a href="#" class="btn btn-primary btn-sm">'.$row->c_name.'</a>';
                return $btn;
            }
            else if($row->post_type == 2){
                $btn = '<a href="#" class="btn btn-primary btn-sm">'.$row->as_category_name.'</a>';
                return $btn;
            }
        })
        ->addColumn('type', function($row){
            if($row->post_type == 1){
                $btn = '<a href="#" class="btn btn-primary btn-sm">English</a>';
                return $btn;
            }else if($row->post_type == 2){
                $btn = '<a href="#" class="btn btn-primary btn-sm">Assamese</a>';
                return $btn;
            }
        })
        ->addColumn('action', function($row){
            if($row->hp_section1 == 1){
                $btn = '<a href="'.route('admin.post_slide', ['id' => encrypt($row->id), 'slide' => encrypt(3)]).'" class="btn btn-danger">Remove</a>';
            }
            return $btn;
        })
        ->rawColumns(['category','action', 'type'])
        ->make(true);
    }

    public function updateFour($postId, $fourId){
        try {
            $id = decrypt($postId);
            $fId = decrypt($fourId);
        }catch(DecryptException $e) {
            return redirect()->back();
        }
        $four_update = DB::table('posts')
            ->where('id', $id)
            ->update([
                'hp_section1' => $fId,
                'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString()
            ]);

        if($four_update){
            return redirect()->back()->with('message','P-Four Updated Successfully!');
        }else{
            return redirect()->back()->with('error','Something Went Wrong Please Try Again');
        }
    }

    public function listFourPage(){
        return view('admin.list_four');
    }

    public function ajaxGetPostFourList(){
        $query = DB::table('posts')
        ->where('hp_section1', 2)
        ->select('posts.*','category.category_name as c_name', 'category.as_category_name as as_category_name')
        ->join('category','posts.cat_id','=','category.id')
        ->orderBy('posts.id','desc');
        return datatables()->of($query->get())
        ->addIndexColumn()
        ->addColumn('category', function($row){
            if($row->post_type == 1){
                $btn = '<a href="#" class="btn btn-primary btn-sm">'.$row->c_name.'</a>';
                return $btn;
            }
            else if($row->post_type == 2){
                $btn = '<a href="#" class="btn btn-primary btn-sm">'.$row->as_category_name.'</a>';
                return $btn;
            }
        })
        ->addColumn('type', function($row){
            if($row->post_type == 1){
                $btn = '<a href="#" class="btn btn-primary btn-sm">English</a>';
                return $btn;
            }else if($row->post_type == 2){
                $btn = '<a href="#" class="btn btn-primary btn-sm">Assamese</a>';
                return $btn;
            }
        })
       ->addColumn('action', function($row){
            if($row->hp_section1 == 2){
                $btn = '<a href="'.route('admin.post_four', ['id' => encrypt($row->id), 'four' => encrypt(3)]).'" class="btn btn-danger">Remove</a>';
            }
            return $btn;
        })
        ->rawColumns(['category', 'type', 'action'])
        ->make(true);
    }
    public function listPopular(){
        return view('admin.popular_list_post');
    }
    public function ajaxGetPopularPostList(){
        $query = DB::table('posts')
            ->where('popular_post', 1)
            ->select('posts.*','category.category_name as c_name', 'category.as_category_name as as_category_name')
            ->join('category','posts.cat_id','=','category.id')
            ->orderBy('posts.id','desc');

        return datatables()->of($query->get())
        ->addIndexColumn()
        ->addColumn('category', function($row){
            if($row->post_type == 1){
                $btn = '<a href="#" class="btn btn-primary btn-sm">'.$row->c_name.'</a>';
                return $btn;
            }
            else if($row->post_type == 2){
                $btn = '<a href="#" class="btn btn-primary btn-sm">'.$row->as_category_name.'</a>';
                return $btn;
            }
        })
        ->addColumn('type', function($row){
            if($row->post_type == 1){
                $btn = '<a href="#" class="btn btn-primary btn-sm">English</a>';
                return $btn;
            }else if($row->post_type == 2){
                $btn = '<a href="#" class="btn btn-primary btn-sm">Assamese</a>';
                return $btn;
            }
        })
        ->addColumn('action', function($row){
            if($row->popular_post == 1){
                $btn = '<a href="'.route('admin.popular_post', ['id' => encrypt($row->id), 'popular' => encrypt(2)]).'" class="btn btn-danger">Remove</a>';
            }
            return $btn;
        })
        ->rawColumns(['category','action', 'type'])
        ->make(true);
    }
    public function updatePopular($postId, $popularId){
      try {
            $id = decrypt($postId);
            $pId = decrypt($popularId);
        }
        catch(DecryptException $e) {
            return redirect()->back();
        }

        $popular_update = DB::table('posts')
        ->where('id', $id)
        ->update([
            'popular_post' => $pId,
            'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString()
        ]);

        if($popular_update){
            return redirect()->back()->with('message','Post Updated Successfully!');
        }else{
            return redirect()->back()->with('error','Something Went Wrong Please Try Again');
        }
    }
    function populateCatgory(Request $request){
        if($request->ajax()){
            $type = $request->get('query');
            if(!empty($type)){
                    $category = NULL;
                    if($type == 1){
                        $eng_category = DB::table('category')
                            ->pluck('category_name', 'id');

                        $category = $eng_category;
                    }else if($type == 2){
                        $ass_category = DB::table('category')
                            ->pluck('as_category_name', 'id');

                        $category = $ass_category;
                    }
                    $json = json_decode($category);
                    foreach($json as $obj => $value){
                        echo '<option value="'.$obj.'">'.$value.'</option>';
                    }
            }else{
                return 1;
            }
        }
    }

    function makeSlug($title){
        return preg_replace('/\s+/u', '-', trim($title));
    }
}
