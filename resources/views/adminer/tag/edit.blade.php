@extends('layouts.admin')
@section('content')
    <form action="{{ route('tag.update', $tag->id) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="container py-5">
            <h1 class="mb-4">Редактировать тег</h1>
            <!-- Заголовок тега -->
            <div class="mb-3">
                <label for="title" class="form-label">Заголовок тега *</label>
                <input value="{{ $tag->title }}" type="text" class="form-control" id="title" name="title" placeholder="Заголовок тега" required>
            </div>

            <button type="submit" class="btn btn-primary">Обновить</button>
        </div>

    </form>
    <form action="{{ route('tag.delete', $tag->id) }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="Удалить">
    </form>
@endsection

