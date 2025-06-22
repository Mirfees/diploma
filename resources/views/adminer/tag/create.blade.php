@extends('layouts.admin')
@section('content')
    <form action="{{ route('tag.store') }}" method="post">
        @csrf
        <div class="container py-5">
            <h1 class="mb-4">Создание тега</h1>
                <!-- Заголовок тега -->
                <div class="mb-3">
                    <label for="title" class="form-label">Заголовок тега *</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Введите свой заголовок" required>
                </div>
                <button type="submit" class="btn btn-primary">Создать</button>
        </div>
    </form>
@endsection
