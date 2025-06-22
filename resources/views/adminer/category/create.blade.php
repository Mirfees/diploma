@extends('layouts.admin')
@section('content')
    <form action="{{ route('category.store') }}" method="post">
        @csrf
        <div class="container py-5">
            <h1 class="mb-4">Создание категории</h1>
                <!-- Заголовок категории -->
                <div class="mb-3">
                    <label for="title" class="form-label">Заголовок категории *</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Какой-то заголовок" required>
                </div>
                <button type="submit" class="btn btn-primary">Создать</button>
        </div>
    </form>
@endsection
