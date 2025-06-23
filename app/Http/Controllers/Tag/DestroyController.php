<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class DestroyController extends BaseController
{
    /**
     * Remove the specified resource from storage.
     */
   public function __invoke(Tag $tag)
   {
       $tag->delete();
       return redirect()->route('tags.adminer.index');
   }
}
