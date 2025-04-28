<?php

namespace App\Http\Controllers\ArchObject;

use App\Http\Controllers\Controller;
use App\Models\ArchObject;
use Illuminate\Http\Request;

class CreateController extends BaseController
{
    /**
     * Show the form for creating a new resource.
     */
   public function __invoke()
   {
       return view('adminer.archObject.create');
   }
}
