<?php

namespace App\Http\Controllers\ArchObject;

use App\Http\Controllers\Controller;
use App\Models\ArchObject;
use Illuminate\Http\Request;
use App\Http\Filters\ArchObject\Filter;
use App\Http\Requests\ArchObject\FilterRequest;
use App\Models\Category;
use App\Models\Tag;

class IndexController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
   public function __invoke(FilterRequest $request)
   {
       $data = $request->validated();
       $search = $request->input('search');

       $filters = $request->only(['search', 'category', 'tag', 'from_date', 'to_date']);

       $archObjects = ArchObject::with(['tags', 'category'])
           ->filter($filters)
           ->latest()
           ->paginate(10)
           ->withQueryString();

       $categories = Category::all();
       $tags = Tag::all();

       return view('object.index', compact('archObjects', 'filters', 'categories', 'tags'));
   }
}
