<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tag\StoreRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class StoreController extends BaseController
{
    /**
     * Store a newly created resource in storage.
     */
   public function __invoke(StoreRequest $request)
   {
       $data = $request->validated();
       $tag = $this->service->store($data);
       return redirect()->route('adminer.tag.index' );
   }
}
