<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends BaseController
{
    /**
     * Update the specified resource in storage.
     */
   public function __invoke(UpdateRequest $request, Category $category)
   {

       $data = $request->validated();

       $this->service->update($category, $data);

       return redirect()->route('category.index');
   }
}
