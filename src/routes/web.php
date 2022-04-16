<?php

Route::group(['namespace'=>'ShakibZaman\Post\Http\Controllers'],function (){
    Route::get('post','PostController@getPosts');
//    Route::get('post',function (){
//        return "Hi";
//    });
});
