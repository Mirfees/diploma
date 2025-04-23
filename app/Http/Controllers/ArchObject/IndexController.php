<?php

namespace App\Http\Controllers\ArchObject;

use App\Http\Controllers\Controller;
use App\Models\ArchObject;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
   public function __invoke()
   {
       return view('object.index');
   }
}
