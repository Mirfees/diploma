<?php

namespace App\Http\Controllers\ArchObject;

use App\Http\Controllers\Controller;
use App\Models\ArchObject;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    /**
     * Display the specified resource.
     */
   public function __invoke(ArchObject $archObject)
   {
       return view('object.show');
   }
}
