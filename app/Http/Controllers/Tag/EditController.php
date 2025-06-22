<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class EditController extends BaseController
{
    /**
     * Show the form for editing the specified resource.
     */
   public function __invoke(Tag $tag)
   {
       $title = 'Редактирование объекта';
       $tags = Tag::all();
       $tags = Tag::all();
       return view('adminer.tag.edit', compact('tag', 'title', 'tags', 'tags'));
   }
}
