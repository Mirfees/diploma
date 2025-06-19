<?php

namespace App\Http\Controllers;

use App\Http\Filters\ArchObject\Filter;
use App\Http\Requests\ArchObject\FilterRequest;
use App\Models\ArchObject;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(FilterRequest $request)
    {
        $data = $request->validated();
        $filter = app()->make(Filter::class, ['queryParams' => array_filter($data)]);
        $archObjects = ArchObject::filter($filter)->paginate(6);
        return view('welcome', compact('archObjects'));
    }
}
