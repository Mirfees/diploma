@extends('layouts.admin')
@section('content')
    <form action="{{ route('post.update', $post->id) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="container py-5">
            <h1 class="mb-4">Редактировать пост</h1>
                <!-- Заголовок поста -->
                <div class="mb-3">
                    <label for="title" class="form-label">Заголовок поста *</label>
                    <input value="{{ $post->title }}" type="text" class="form-control" id="title" name="title" placeholder="Какой-то заголовок" required>
                </div>

                <!-- Контент -->
                <div class="mb-3">
                    <label for="content" class="form-label">Контент *</label>
                    <textarea class="form-control" id="content" name="content" rows="10" placeholder="Пиши о том, что тебя творожит" required>{{ $post->content }}</textarea>
                </div>

                <!-- Категория -->
                <div class="mb-3">
                    <label for="category_id" class="form-label">Категория</label>
                    <select class="form-select" id="category_id" name="category_id">
                        <option disabled selected>Выберите категорию</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $category->id == $post->category_id ? 'selected' : '' }}>
                                {{ $category->title }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Теги -->
                <div class="mb-3">
                    <label for="tags" class="form-label">Теги</label>
                    <select multiple class="form-select" id="tags" name="tags[]">
                        @foreach($tags as $tag)
                            <option value="{{ $tag->id }}"
                                    @if($post->tags->contains($tag->id)) selected @endif>
                                {{ $tag->title }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Обновить</sbutton>
        </div>

    </form>
    <form action="{{ route('post.delete', $post->id) }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="Удалить">
    </form>
@endsection
