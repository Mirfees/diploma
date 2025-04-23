<?php

namespace App\Http\Controllers\Post;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $title = 'Создать пост';
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.create', compact('title', 'categories', 'tags'));
    }
}
