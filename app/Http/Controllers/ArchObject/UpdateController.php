<?php

namespace App\Http\Controllers\ArchObject;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArchObject\UpdateRequest;
use App\Models\ArchObject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends BaseController
{
    /**
     * Update the specified resource in storage.
     */
   public function __invoke(UpdateRequest $request, ArchObject $archObject)
   {

       $data = $request->validated();

       if ($request->hasFile('image')) {
           // Удаляем старое изображение, если оно было
           if ($archObject->image) {
               Storage::disk('public')->delete($archObject->image);
           }

           // Сохраняем новое изображение
           $image = $request->file('image');
           $path = $image->store('archObject', 'public');
           $data['image'] = $path; // ❗Добавляем в массив данных
       }

       $this->service->update($archObject, $data);

       return redirect()->route('arch_object.show', $archObject->id);
   }
}
