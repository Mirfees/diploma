<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class CreateController extends BaseController
{
    /**
     * Show the form for creating a new resource.
     */
   public function __invoke()
   {
       $title = 'Создать категорию';
       $categories = Category::all();
       $tags = Tag::all();
       return view('adminer.category.create', compact('title', 'categories', 'tags'));
   }
}
