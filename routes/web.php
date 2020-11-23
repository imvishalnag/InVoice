<?php

use Illuminate\Support\Facades\Route;
require_once  __DIR__."/frontend.php";

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('login', 'AdminLoginController@showAdminLoginForm')->name('admin.login');
    Route::post('login', 'AdminLoginController@adminLogin');
    Route::post('logout', 'AdminLoginController@logout')->name('admin.logout');
});

Route::group(['middleware'=>'auth:admin','prefix'=>'admin','namespace'=>'Admin'],function(){
    Route::get('/dashboard', 'AdminDashboardController@index')->name('admin.dashboard');

    /**
     * Posts Controller
     */
    
    //Add Post
    Route::get('/create/post', 'PostPagesController@createPost')->name('admin.create_post');
    Route::post('/add/post', 'PostPagesController@addPost')->name('admin.add_post');
    Route::get('/populate/category', 'PostPagesController@populateCatgory')->name('admin.populate_category');
    //Add Youtube Video
    Route::get('/create/video', 'PostPagesController@createVideo')->name('admin.create_video');
    Route::post('/add/video', 'PostPagesController@addVideo')->name('admin.add_video');
    
    //List Posts
    Route::get('/list/eng/post', 'PostPagesController@listPost')->name('admin.eng_list_post');
    Route::get('/list/eng/video', 'PostPagesController@listVideo')->name('admin.eng_video_list');
    Route::get('/list/ass/post', 'PostPagesController@assListPost')->name('admin.ass_list_post');
    Route::get('/list/ass/video', 'PostPagesController@assListVideo')->name('admin.ass_video_list');

    Route::get('/ajax/get/eng/post/','PostPagesController@ajaxGetPostList')->name('admin.ajax.get_eng_post_list');
    Route::get('/ajax/get/eng/video/','PostPagesController@ajaxGetVideoList')->name('admin.ajax.get_eng_video_list');
    Route::get('/ajax/get/ass/post/','PostPagesController@ajaxGetAssPostList')->name('admin.ajax.get_ass_post_list');
    Route::get('/ajax/get/ass/video/','PostPagesController@ajaxGetAssVideoList')->name('admin.ajax.get_ass_video_list');

    Route::get('/ajax/get/popular/post/','PostPagesController@ajaxGetPopularPostList')->name('admin.ajax.get_eng_popular_post_list');

    Route::get('/get/post/{id}','PostPagesController@GetPostSinglePost')->name('admin.post_view');
    Route::get('/status/post/{id}/{status}','PostPagesController@statusPost')->name('admin.post_status');
    Route::get('/status/video/{id}/{status}','PostPagesController@statusVideo')->name('admin.video_status');
    Route::get('/edit/post/{id}','PostPagesController@editPost')->name('admin.post_edit');
    Route::post('/update/post','PostPagesController@updatePost')->name('admin.update_post');
    Route::get('/ajax/get/slider/post/','PostPagesController@ajaxGetPostSliderList')->name('admin.ajax.get_slider_post_list');
    Route::get('/ajax/get/four/post/','PostPagesController@ajaxGetPostFourList')->name('admin.ajax.get_four_post_list');

    Route::get('/slide/post/{id}/{slide}','PostPagesController@updateSlide')->name('admin.post_slide');
    Route::get('/four/post/{id}/{four}','PostPagesController@updateFour')->name('admin.post_four');
    Route::get('/popular/post/{id}/{popular}','PostPagesController@updatePopular')->name('admin.popular_post');
    // Breaking News
    Route::get('/breaking/post/{id}/{status}', 'PostPagesController@breakingNews')->name('admin.breaking_news');

    Route::get('/slide/post/list','PostPagesController@listSlidePage')->name('admin.slider_list');
    Route::get('/four/post/list','PostPagesController@listFourPage')->name('admin.four_list');
    Route::get('/popular/post/list','PostPagesController@listPopular')->name('admin.popular_list');


    /** Category CK Editor Image Upload **/
    Route::post('ck-editor-image-upload','PostPagesController@ckEditorImageUpload')->name('admin.ck_editor_image_upload');

    /**
     * Category Controller
     */
    //Add Category
    Route::get('/create/category', 'CategoryPagesController@createCategory')->name('admin.create_catgeory');
    Route::post('/add/category', 'CategoryPagesController@addCategory')->name('admin.add_category');

    //List Category
    Route::get('/list/category', 'CategoryPagesController@listCategory')->name('admin.list_category');
    Route::get('edit_category/{categoryId}', 'CategoryPagesController@showCategoryEditForm')->name('edit_category');
    Route::post('update_category', 'CategoryPagesController@updateCategory')->name('admin.update_category');
    Route::get('status_category/{id}/{status}', 'CategoryPagesController@statusCategory')->name('status_category');
    // Route::get('/ajax/get/category/','CategoryPagesController@ajaxGetCategoryList')->name('admin.ajax.get_category_list');
});

//\site Control


