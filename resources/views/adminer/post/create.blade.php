@extends('layouts.admin')
@section('content')
    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <div class="container py-5">
            <h1 class="mb-4">Создание поста</h1>
            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Заголовок поста -->
                <div class="mb-3">
                    <label for="title" class="form-label">Заголовок поста *</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Какой-то заголовок" required>
                </div>

                <!-- Контент -->
                <div class="mb-3">
                    <label for="content" class="form-label">Контент *</label>
                    <textarea class="form-control" id="content" name="content" rows="10" placeholder="Пиши о том, что тебя творожит" required></textarea>
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

                <!-- Типа изображение -->
                <div class="mb-3">
                    <label for="image" class="form-label">Изображение</label>
                    <input type="text" class="form-control" id="image" name="image" placeholder="Какое-то изображение">
                </div>

                <button type="submit" class="btn btn-primary">Создать</button>
            </form>
        </div>
    </form>
@endsection
