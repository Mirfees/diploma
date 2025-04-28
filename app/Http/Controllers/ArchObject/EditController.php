<?php

namespace App\Http\Controllers\ArchObject;

use App\Http\Controllers\Controller;
use App\Models\ArchObject;
use Illuminate\Http\Request;

class EditController extends BaseController
{
    /**
     * Show the form for editing the specified resource.
     */
   public function __invoke(ArchObject $archObject)
   {
       return view('adminer.archObject.edit', compact('archObject'));
   }
}
