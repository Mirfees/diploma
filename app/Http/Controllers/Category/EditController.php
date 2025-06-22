<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class EditController extends BaseController
{
    /**
     * Show the form for editing the specified resource.
     */
   public function __invoke(Category $category)
   {
       $title = 'Редактирование объекта';
       $categories = Category::all();
       $tags = Tag::all();
       return view('adminer.category.edit', compact('category', 'title', 'categories', 'tags'));
   }
}
