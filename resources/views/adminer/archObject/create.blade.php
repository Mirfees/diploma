@extends('layouts.admin')
@section('content')
    <div class="container py-5">
        <h1 class="mb-4">Создание нового объекта</h1>
        <form action="{{ route('arch_object.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Название -->
            <div class="mb-3">
                <label for="title" class="form-label">Название *</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <!-- Главный руководитель -->
            <div class="mb-3">
                <label for="title" class="form-label">Главный руководитель</label>
                <input type="text" class="form-control" id="title" name="director">
            </div>

            <!-- Главное изображение -->
            <div class="mb-3">
                <label for="image" class="form-label">Главное изображение</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <!-- Краткое описание -->
            <div class="mb-3">
                <label for="excerpt" class="form-label">Краткое описание</label>
                <textarea class="form-control" id="excerpt" name="excerpt" rows="3"></textarea>
            </div>

            <!-- Категория -->
            <div class="mb-3">
                <label for="category_id" class="form-label">Категория</label>
                <select class="form-select" id="category_id" name="category_id">
                    <option selected disabled>Выберите категорию</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Теги -->
            <div class="mb-3">
                <label for="tags" class="form-label">Теги</label>
                <select multiple class="form-select" id="tags" name="tags[]">
                    @foreach($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Содержание -->
            <div class="mb-3">
                <label for="content" class="form-label">Содержание *</label>
                <textarea class="form-control" id="content" name="content" rows="6" required></textarea>
            </div>

            <!-- Долгота -->
            <div class="mb-3">
                <label for="longitude" class="form-label">Долгота</label>
                <input type="text" class="form-control" id="longitude" name="longitude">
            </div>

            <!-- Широта -->
            <div class="mb-3">
                <label for="attitude" class="form-label">Широта</label>
                <input type="text" class="form-control" id="attitude" name="attitude">
            </div>

            <div class="mb-3">
                <label for="documents" class="form-label">Документы:</label>
                <input type="file" class="form-control" name="documents[]" multiple>
            </div>


            <!-- Расположение -->
            <div class="mb-3">
                <label for="place" class="form-label">Расположение</label>
                <input type="text" class="form-control" id="place" name="place">
            </div>

            <button type="submit" class="btn btn-primary">Сохранить объект</button>
        </form>
    </div>
@endsection
