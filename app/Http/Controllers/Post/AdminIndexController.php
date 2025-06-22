<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Post\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminIndexController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
   public function __invoke(FilterRequest $request)
   {
       $data = $request->validated();

       $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
       $posts = Post::filter($filter)->paginate(20);
       return view('adminer.post.index', compact('posts'));
   }
}
