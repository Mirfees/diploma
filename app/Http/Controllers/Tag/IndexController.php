<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Filters\Tag\Filter;
use App\Http\Requests\Tag\FilterRequest;

class IndexController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
   public function __invoke(FilterRequest $request)
   {
       $data = $request->validated();

       $filter = app()->make(Filter::class, ['queryParams' => array_filter($data)]);
       $tags = Tag::filter($filter)->paginate(6);
       return view('adminer.tag.index', compact('tags'));
   }
}
