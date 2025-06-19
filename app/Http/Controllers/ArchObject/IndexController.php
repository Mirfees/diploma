<?php

namespace App\Http\Controllers\ArchObject;

use App\Http\Controllers\Controller;
use App\Models\ArchObject;
use Illuminate\Http\Request;
use App\Http\Filters\ArchObject\Filter;
use App\Http\Requests\ArchObject\FilterRequest;

class IndexController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
   public function __invoke(FilterRequest $request)
   {
       $data = $request->validated();

       $filter = app()->make(Filter::class, ['queryParams' => array_filter($data)]);
       $archObjects = ArchObject::filter($filter)->paginate(6);
       return view('object.index', compact('archObjects'));
   }
}
