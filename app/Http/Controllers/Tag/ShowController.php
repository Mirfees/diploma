<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    /**
     * Display the specified resource.
     */
   public function __invoke(Tag $tag)
   {
       return view('object.show', compact('tag'));
   }
}
