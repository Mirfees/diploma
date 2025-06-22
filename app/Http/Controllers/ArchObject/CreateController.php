<?php

namespace App\Http\Controllers\ArchObject;

use App\Http\Controllers\Controller;
use App\Models\ArchObject;
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
       $title = 'Создать объект';
       $categories = Category::all();
       $tags = Tag::all();
       return view('adminer.archObject.create', compact('title', 'categories', 'tags'));
   }
}
