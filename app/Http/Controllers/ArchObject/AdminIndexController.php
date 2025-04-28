<?php

namespace App\Http\Controllers\ArchObject;

use App\Http\Controllers\Controller;
use App\Http\Filters\ArchObject\Filter;
use App\Http\Requests\ArchObject\FilterRequest;
use App\Models\ArchObject;
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
       $archObjects = ArchObject::filter($filter)->paginate(20);
       return view('adminer.archObject.index', compact('archObjects'));
   }
}
