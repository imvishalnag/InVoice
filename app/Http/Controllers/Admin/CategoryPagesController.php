<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
class CategoryPagesController extends Controller
{
    public function createCategory(){
        return view('admin.create_category');
    }
    
    public function listCategory(){
        $category = DB::table('category')->get();
        return view('admin.list_category', compact('category'));
    }

    public function addCategory(Request $request){
        $this->validate($request, [
            'category' => 'required',
            'ass_category' => 'required'
        ]);
        
        $category = $request->input('category');
        $ass_category = $request->input('ass_category');
        $insert_category = DB::table('category')
            ->insertGetId([
                'category_name' => $category,
                'as_category_name' => $ass_category,
                'created_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
            ]); 

        if($insert_category){
            return redirect()->back()->with('message','Category Added Successfully');
        }else{
             return redirect()->back()->with('error','Something Went Wrong Please Try Again');
        } 
    }

    public function showCategoryEditForm($cat_id){
        try {
            $id = decrypt($cat_id);
        }catch(DecryptException $e) {
            return redirect()->back();
        }
        $category = DB::table('category')->where('id', $id)->first();
        return view('admin.edit_category', compact('category'));
    }

    public function updateCategory(Request $request){
        $this->validate($request, [
            'category' => 'required',
            'ass_category' => 'required'
        ]);
        
        $category = $request->input('category');
        $ass_category = $request->input('ass_category');
        $id = $request->input('categoryId');
        $update_category = DB::table('category')
            ->where('id', $id)
            ->update([
                'category_name' => $category,
                'as_category_name' => $ass_category,
                'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
            ]); 

        if($update_category){
            return redirect()->back()->with('message','Category Updated Successfully');
        }else{
             return redirect()->back()->with('error','Something Went Wrong Please Try Again');
        } 
    }

    public function statusCategory($TId, $sId){
        try {
            $id = decrypt($TId);
            $statusId = decrypt($sId);
        }catch(DecryptException $e) {
            return redirect()->back();
        }
        $update_category = DB::table('category')
        ->where('id', $id)
        ->update([
            'status' => $statusId,
            'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
        ]); 
        
        if($update_category){
            return redirect()->back()->with('message','Updated Successfully!');
        }else{
             return redirect()->back()->with('error','Something Went Wrong Please Try Again');
        } 

    }
}
