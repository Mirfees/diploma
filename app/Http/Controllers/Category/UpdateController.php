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

       if ($request->hasFile('image')) {
           // Удаляем старое изображение, если оно было
           if ($category->image) {
               Storage::disk('public')->delete($category->image);
           }

           // Сохраняем новое изображение
           $image = $request->file('image');
           $path = $image->store('category', 'public');
           $data['image'] = $path; // ❗Добавляем в массив данных
       }

       $this->service->update($category, $data);

       return redirect()->route('arch_object.show', $category->id);
   }
}
