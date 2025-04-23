<?php

namespace App\Http\Controllers\ArchObject;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArchObject\StoreRequest;
use App\Models\ArchObject;
use Illuminate\Http\Request;

class StoreController extends BaseController
{
    /**
     * Store a newly created resource in storage.
     */
   public function __invoke(StoreRequest $request)
   {
       if ($request->hasFile('image')) {
           $image = $request->file('image');
           $path = $image->store('archObject');
       }

       $data = $request->validated();

       $data['image'] = $path;

       $this->service->store($data);

       return redirect()->route('arch_object.index');
   }
}
