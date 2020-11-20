<?php

//========= index =========//



//========= News =========//

Route::get('/news', function () {
    return view('web.news.news-list');
})->name('web.news.news-list');

Route::get('/Single', function () {
    return view('web.news.single-news');
})->name('web.news.single-news');

//========= Search =========//

Route::get('/search', function () {
    return view('web.search.search-list');
})->name('web.search.search-list');

//========= Livetv =========//

Route::get('/Livetv', function () {
    return view('web.livetv.livetv');
})->name('web.livetv.livetv');

//========= about =========//

Route::get('/about', function () {
    return view('web.about.about');
})->name('web.about.about');

//========= order =========//

Route::get('/contact', function () {
    return view('web.contact.contact');
})->name('web.contact.contact');


Route::group(['namespace' => 'Web'], function(){
	Route::get('/', 'MainController@frontPagePost')->name('web.index');

	Route::group(['prefix' => 'english'], function(){
		Route::get('/posts/{slug}/{id}', 'MainController@showPost')->name('web.viewPost');
		Route::get('/posts/{id}', 'MainController@headerNav')->name('web.news');
		Route::post('/search', 'MainController@search')->name('web.search');
	});
});


Route::group(['namespace' => 'Assamese'], function(){
	Route::get('/assamese', 'MainController@frontPagePost')->name('assamese.index');
	
	Route::group(['prefix' => 'assamese'], function(){
		Route::get('/posts/{slug}/{id}', 'MainController@showPost')->name('assamese.viewPost');
		Route::get('/posts/{id}', 'MainController@headerNav')->name('ass.news');
		Route::post('/search', 'MainController@search')->name('ass.search');
	});
});