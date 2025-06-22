<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tag\UpdateRequest;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends BaseController
{
    /**
     * Update the specified resource in storage.
     */
   public function __invoke(UpdateRequest $request, Tag $tag)
   {

       $data = $request->validated();

       $this->service->update($tag, $data);

       return redirect()->route('tag.index');
   }
}
