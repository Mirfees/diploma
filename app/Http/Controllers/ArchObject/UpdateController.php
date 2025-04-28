<?php

namespace App\Http\Controllers\ArchObject;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArchObject\UpdateRequest;
use App\Models\ArchObject;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
    /**
     * Update the specified resource in storage.
     */
   public function __invoke(UpdateRequest $request, ArchObject $archObject)
   {
       $data = $request->validated();

       $this->service->update($archObject, $data);

       return redirect()->route('arch_object.show', $archObject->id);
   }
}
