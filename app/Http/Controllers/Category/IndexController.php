<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Filters\Category\Filter;
use App\Http\Requests\Category\FilterRequest;

class IndexController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
   public function __invoke(FilterRequest $request)
   {
       $data = $request->validated();

       $filter = app()->make(Filter::class, ['queryParams' => array_filter($data)]);
       $categories = Category::filter($filter)->paginate(6);
       return view('object.index', compact('categories'));
   }
}
