<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    /**
     * Display the specified resource.
     */
   public function __invoke(Category $category)
   {
       return view('object.show', compact('category'));
   }
}
