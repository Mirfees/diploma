<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Filters\Category\Filter;
use App\Http\Requests\Category\FilterRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminIndexController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
   public function __invoke(FilterRequest $request)
   {
       $data = $request->validated();

       $filter = app()->make(Filter::class, ['queryParams' => array_filter($data)]);
       $categories = Category::filter($filter)->paginate(20);
       return view('adminer.category.index', compact('categories'));
   }
}
