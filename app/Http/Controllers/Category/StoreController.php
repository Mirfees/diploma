<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Models\Category;
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
           $path = $image->store('category', 'public');
       }

       $data = $request->validated();


       $data['image'] = $path;

       // Обработка документов
       if ($request->hasFile('documents')) {
           $documents = [];
           foreach ($request->file('documents') as $document) {
               $documents[] = $document->store('documents', 'public');
           }
           // Сохраняем как JSON
           $data['documents'] = $documents;
       } else {
           $data['documents'] = [];
       }

       $category = $this->service->store($data);
       return redirect()->route('arch_object.index');
   }
}
