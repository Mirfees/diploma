<?php

use App\Http\Controllers\Post;
use App\Models\ArchObject;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [\App\Http\Controllers\Post\IndexController::class, '__invoke'])->name('post.index');

Route::get('/posts/create', [\App\Http\Controllers\Post\CreateController::class, '__invoke'])->name('post.create');

Route::post('/posts', [\App\Http\Controllers\Post\StoreController::class, '__invoke'])->name('post.store');

Route::get('/posts/{post}', [\App\Http\Controllers\Post\ShowController::class, '__invoke'])->name('post.show');

Route::get('/posts/{post}/edit', [\App\Http\Controllers\Post\EditController::class, '__invoke'])->name('post.edit');

Route::patch('/posts/{post}', [\App\Http\Controllers\Post\UpdateController::class, '__invoke'])->name('post.update');

Route::delete('/posts/{post}', [\App\Http\Controllers\Post\DestroyController::class, '__invoke'])->name('post.delete');

Route::group(['prefix' => 'adminer'], function () {
    Route::get('/', [\App\Http\Controllers\Adminer\IndexController::class, '__invoke'])->name('admin.index')
        ->middleware(\App\Http\Middleware\AdminPanelMiddleware::class);
    Route::get('/arch_objects/create', [\App\Http\Controllers\ArchObject\CreateController::class, '__invoke'])->name('arch_object.create');
});

Route::get('/login', [\App\Http\Controllers\HomeController::class, 'index']);

Route::group(['prefix' => 'arch_objects'], function () {
    Route::get('/', [\App\Http\Controllers\ArchObject\IndexController::class, '__invoke'])->name('arch_object.index');
    Route::get('/{ArchObject}', [\App\Http\Controllers\ArchObject\ShowController::class, '__invoke'])->name('arch_object.show');
    Route::post('/', [\App\Http\Controllers\ArchObject\StoreController::class, '__invoke'])->name('arch_object.store');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
