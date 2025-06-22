@extends('layouts.admin')
@section('content')
    <div class="container py-5">
        <h1 class="mb-4">Редактирование объекта</h1>
        <form action="{{ route('arch_object.update', $archObject->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <!-- Название -->
            <div class="mb-3">
                <label for="title" class="form-label">Название *</label>
                <input value="{{ $archObject->title }}" type="text" class="form-control" id="title" name="title" required>
            </div>

            <!-- Главный руководитель -->
            <div class="mb-3">
                <label for="title" class="form-label">Главный руководитель</label>
                <input value="{{ $archObject->director }}" type="text" class="form-control" id="title" name="director">
            </div>


            <!-- Главное изображение -->
            <div class="mb-3">
                <label for="image" class="form-label">Главное изображение</label>

                <!-- Предпросмотр текущего изображения -->
                @if ($archObject->image)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $archObject->image) }}" alt="Текущее изображение" class="img-thumbnail" style="max-height: 150px;">
                        <p class="form-text">Текущее изображение загружено</p>
                    </div>
                @endif

                <!-- Поле загрузки нового изображения -->
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <!-- Краткое описание -->
            <div class="mb-3">
                <label for="excerpt" class="form-label">Краткое описание</label>
                <textarea class="form-control" id="excerpt" name="excerpt" rows="3">{{ $archObject->excerpt }}</textarea>
            </div>

            <!-- Содержание -->
            <div class="mb-3">
                <label for="content" class="form-label">Содержание *</label>
                <textarea class="form-control" id="content" name="content" rows="6" required>{{ $archObject->content }}</textarea>
            </div>

            <!-- Долгота -->
            <div class="mb-3">
                <label for="longitude" class="form-label">Долгота</label>
                <input value="{{ $archObject->longitude }}" type="text" class="form-control" id="longitude" name="longitude">
            </div>

            <!-- Широта -->
            <div class="mb-3">
                <label for="attitude" class="form-label">Широта</label>
                <input value="{{ $archObject->attitude }}" type="text" class="form-control" id="attitude" name="attitude">
            </div>

            <div class="mb-3">

                <label for="documents" class="form-label">Документы:</label>
                @if (!empty($archObject->documents))
                    <div class="mb-2">
                        @foreach($archObject->documents as $document)
                            @if ($document)
                                {{ $document }}
                            @endif
                        @endforeach
                    </div>
                @endif
                <input type="file" class="form-control" name="documents[]" multiple>
            </div>

            <!-- Расположение -->
            <div class="mb-3">
                <label for="place" class="form-label">Расположение</label>
                <input value="{{ $archObject->place }}" type="text" class="form-control" id="place" name="place">
            </div>

            <button type="submit" class="btn btn-primary">Сохранить объект</button>
        </form>
    </div>
@endsection
