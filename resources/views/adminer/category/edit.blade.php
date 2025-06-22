@extends('layouts.admin')
@section('content')
    <form action="{{ route('category.update', $category->id) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="container py-5">
            <h1 class="mb-4">Редактировать категорию</h1>
            <!-- Заголовок категории -->
            <div class="mb-3">
                <label for="title" class="form-label">Заголовок категории *</label>
                <input value="{{ $category->title }}" type="text" class="form-control" id="title" name="title" placeholder="Какой-то заголовок" required>
            </div>

            <button type="submit" class="btn btn-primary">Обновить</button>
        </div>

    </form>
    <form action="{{ route('category.delete', $category->id) }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="Удалить">
    </form>
@endsection

