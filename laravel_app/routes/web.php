<?php

use Illuminate\Support\Facades\Route;

// original
// Route::get('/', function () {
//     return view('welcome');
// });

// GMO: create table
Route::get('/', function () {

    //     Schema::dropIfExists("table_users");
    //     Schema::create("table_users", function($newtable){
    //     $newtable->increments("id");
    //     $newtable->string("name");
    //     $newtable->string("email")->unique();
    //     $newtable->string("password");
    //     $newtable->boolean("is_admin");
    //     $newtable->timestamp("email_verified_at")->nullable();
    //     $newtable->string("remember_token");
    //     $newtable->timestamps();
    // });

    return view('welcome');
});
