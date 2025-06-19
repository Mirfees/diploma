<?php

namespace App\Http\Controllers\ArchObject;

use App\Http\Controllers\Controller;
use App\Models\ArchObject;
use Illuminate\Http\Request;

class DestroyController extends BaseController
{
    /**
     * Remove the specified resource from storage.
     */
   public function __invoke(ArchObject $archObject)
   {
       $archObject->delete();
       return redirect()->route('arch_objects.adminer.index');
   }
}
