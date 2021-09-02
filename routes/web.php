<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\UploadController;


// Customer
Route::get('login', [CustomerController::class, 'login'])->name('login');
Route::post('postlogin', [CustomerController::class, 'postlogin']);
Route::get('register', [CustomerController::class, 'register']);
Route::post('postReg', [CustomerController::class, 'postReg']);
Route::get('logout', [CustomerController::class, 'logout'])->name('logout');

Route::get('blog', [BlogController::class, 'blog'])->name('blog');
Route::get('blog_detail/{tf_post_url}', [BlogController::class, 'blog_detail'])->name('blog_detail');

//Admin
Route::get("dashboard",[AdminController::class,'dashboard'])->name('dashboard');

	// Login Admin
	Route::get('logAdmin', [AdminController::class, 'logAdmin'])->name('logAdmin')->middleware('CheckUser');
	Route::post('pLogAdmin', [AdminController::class, 'pLogAdmin']);
	Route::get('regAdmin', [AdminController::class, 'regAdmin']);
	Route::post('pRegAdmin', [AdminController::class, 'pRegAdmin']);
	//blog
	Route::get('all_blog', [BlogController::class, 'all_blog'])->name('all_blog');
	Route::get('add_new_post', [BlogController::class, 'add_new_post'])->name('add_new_post');
    Route::post('post_draft_blog', [BlogController::class, 'post_draft_blog']);
	Route::get('edit_post/{tf_post_id}', [BlogController::class, 'edit_post'])->name('edit_post');
    Route::post('post_edit_blog', [BlogController::class, 'post_edit_blog']);
	Route::get('delete_post/{tf_post_id}', [BlogController::class, 'delete_post']);

	//draft blog
	Route::get('draft_blog', [BlogController::class, 'draft_blog'])->name('draft_blog');
	Route::get('edit_draft_post/{tf_draft_id}', [BlogController::class, 'edit_draft_post'])->name('edit_draft_post');
    Route::post('post_edit_draft', [BlogController::class, 'post_edit_draft']);
	Route::get('delete_draft_post/{tf_draft_id}', [BlogController::class, 'delete_draft_post']);


    Route::post('upload/services', [UploadController::class, 'store']);

Route::get('language/{language}',[LangController::class,'changeLang'])->name('language');
