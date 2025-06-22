<?php

use App\Http\Controllers\Post;
use App\Models\ArchObject;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

Route::get('/posts', [\App\Http\Controllers\Post\IndexController::class, '__invoke'])->name('post.index');
Route::post('/posts', [\App\Http\Controllers\Post\StoreController::class, '__invoke'])->name('post.store');
Route::get('/posts/{post}', [\App\Http\Controllers\Post\ShowController::class, '__invoke'])->name('post.show');
Route::get('/posts/{post}/edit', [\App\Http\Controllers\Post\EditController::class, '__invoke'])->name('post.edit');
Route::patch('/posts/{post}', [\App\Http\Controllers\Post\UpdateController::class, '__invoke'])->name('post.update');
Route::delete('/posts/{post}', [\App\Http\Controllers\Post\DestroyController::class, '__invoke'])->name('post.delete');

Route::group(['prefix' => 'adminer'], function () {
    Route::get('/', [\App\Http\Controllers\Adminer\IndexController::class, '__invoke'])->name('admin.index')
        ->middleware(\App\Http\Middleware\AdminPanelMiddleware::class);
    Route::get('/arch_objects/create', [\App\Http\Controllers\ArchObject\CreateController::class, '__invoke'])->name('arch_object.create');
    Route::get('/arch_objects', [\App\Http\Controllers\ArchObject\AdminIndexController::class, '__invoke'])->name('arch_objects.adminer.index');

    Route::get('/posts/create', [\App\Http\Controllers\Post\CreateController::class, '__invoke'])->name('post.create');
    Route::get('/posts', [\App\Http\Controllers\Post\AdminIndexController::class, '__invoke'])->name('posts.adminer.index');

    Route::get('/categories/create', [\App\Http\Controllers\Category\CreateController::class, '__invoke'])->name('category.create');
    Route::get('/categories', [\App\Http\Controllers\Category\AdminIndexController::class, '__invoke'])->name('categories.adminer.index');

    Route::get('/tags/create', [\App\Http\Controllers\Tag\CreateController::class, '__invoke'])->name('tag.create');
    Route::get('/tags', [\App\Http\Controllers\Tag\AdminIndexController::class, '__invoke'])->name('tags.adminer.index');
});

Route::get('/login', [\App\Http\Controllers\HomeController::class, 'index']);

Route::group(['prefix' => 'arch_objects'], function () {
    Route::get('/', [\App\Http\Controllers\ArchObject\IndexController::class, '__invoke'])->name('arch_object.index');
    Route::get('/{archObject}', [\App\Http\Controllers\ArchObject\ShowController::class, '__invoke'])->name('arch_object.show');
    Route::post('/', [\App\Http\Controllers\ArchObject\StoreController::class, '__invoke'])->name('arch_object.store');
    Route::get('/{archObject}/edit', [\App\Http\Controllers\ArchObject\EditController::class, '__invoke'])->name('arch_object.edit');
    Route::patch('/{archObject}', [\App\Http\Controllers\ArchObject\UpdateController::class, '__invoke'])->name('arch_object.update');
    Route::delete('/{arch_object}', [\App\Http\Controllers\ArchObject\DestroyController::class, '__invoke'])->name('arch_object.delete');
});


Route::group(['prefix' => 'categories'], function () {
    Route::get('/', [\App\Http\Controllers\Category\IndexController::class, '__invoke'])->name('category.index');
    Route::get('/{category}', [\App\Http\Controllers\Category\ShowController::class, '__invoke'])->name('category.show');
    Route::post('/', [\App\Http\Controllers\Category\StoreController::class, '__invoke'])->name('category.store');
    Route::get('/{category}/edit', [\App\Http\Controllers\Category\EditController::class, '__invoke'])->name('category.edit');
    Route::patch('/{category}', [\App\Http\Controllers\Category\UpdateController::class, '__invoke'])->name('category.update');
    Route::delete('/{category}', [\App\Http\Controllers\Category\DestroyController::class, '__invoke'])->name('category.delete');
});

Route::group(['prefix' => 'tags'], function () {
    Route::get('/', [\App\Http\Controllers\Tag\IndexController::class, '__invoke'])->name('tag.index');
    Route::get('/{tag}', [\App\Http\Controllers\Tag\ShowController::class, '__invoke'])->name('tag.show');
    Route::post('/', [\App\Http\Controllers\Tag\StoreController::class, '__invoke'])->name('tag.store');
    Route::get('/{tag}/edit', [\App\Http\Controllers\Tag\EditController::class, '__invoke'])->name('tag.edit');
    Route::patch('/{tag}', [\App\Http\Controllers\Tag\UpdateController::class, '__invoke'])->name('tag.update');
    Route::delete('/{tag}', [\App\Http\Controllers\Tag\DestroyController::class, '__invoke'])->name('tag.delete');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
