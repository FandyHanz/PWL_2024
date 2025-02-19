<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function (){
    return 'World';
});

Route::get('/welcome_message', function(){
    return 'selamat datang';
});

Route::get('/about', function(){
    return '2341720165';
});

Route::get('/user/{name}', function($name){
    return 'nama saya ' . $name;
});

Route::get('/post/{post}/comment/{comment}', function($postId, $commentId){
    return 'posts ke- ' . $postId . "komentar ke- " . $commentId;
});

Route::get('/article/{article}', function($articleId){
    return 'article id- {'. $articleId . '}';
});

Route::get('/name/{name?}', function($name = 'John'){
    return 'Nama saya - ' . $name;
});
