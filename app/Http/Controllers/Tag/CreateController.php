<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
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
       $tags = Tag::all();
       $tags = Tag::all();
       return view('adminer.tag.create', compact('title', 'tags', 'tags'));
   }
}
