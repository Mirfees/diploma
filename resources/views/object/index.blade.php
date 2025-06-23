@extends('layouts.main')
@section('content')

    <!-- Заголовок -->
    <header class="text-center">
        <h1 class="text-4xl font-bold text-stone-800">Архив объектов</h1>
        <p class="text-stone-500 mt-2">Все зафиксированные археологические раскопки</p>
    </header>

    <form method="GET" action="{{ route('arch_object.index') }}" class="grid grid-cols-1 md:grid-cols-6 gap-4 mb-6">
        <!-- Поиск -->
        <input type="text" name="search" placeholder="Поиск..." value="{{ request('search') }}"
               class="border border-stone-300 rounded-xl px-4 py-2 text-stone-700 col-span-2" />

        <!-- Категория -->
        <select name="category" class="border border-stone-300 rounded-xl px-4 py-2 text-stone-700">
            <option value="">Категория</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" @selected(request('category') == $category->id)>
                    {{ $category->title }}
                </option>
            @endforeach
        </select>

        <!-- Тег -->
        <select name="tag" class="border border-stone-300 rounded-xl px-4 py-2 text-stone-700">
            <option value="">Тег</option>
            @foreach($tags as $tag)
                <option value="{{ $tag->id }}" @selected(request('tag') == $tag->id)>
                    {{ $tag->title }}
                </option>
            @endforeach
        </select>

        <!-- Дата от -->
        <input type="date" name="from_date" value="{{ request('from_date') }}"
               class="border border-stone-300 rounded-xl px-4 py-2 text-stone-700" />

        <!-- Дата до -->
        <input type="date" name="to_date" value="{{ request('to_date') }}"
               class="border border-stone-300 rounded-xl px-4 py-2 text-stone-700" />

        <!-- Кнопка -->
        <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-xl transition duration-200">
            Фильтр
        </button>
    </form>

    <!-- Сетка объектов -->
    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Объект 1 -->
        @foreach($archObjects as $archObject)
        <a href="{{ route('arch_object.show', $archObject->id) }}" class="bg-white border border-stone-200 rounded-2xl shadow p-4 hover:shadow-lg transition">
            <img src="{{ asset('storage/' . $archObject->image) }}" style="object-fit: cover; max-height: 215px; width: 100%" class="rounded-xl mb-4">
            <h3 class="text-xl font-semibold text-amber-800">{{ $archObject->title }}</h3>
            <p class="text-sm text-stone-500">{{ $archObject->place }}</p>
            <p class="text-stone-600 mt-2">{{ $archObject->excerpt }}</p>
            <div style="display: none" class="flex flex-wrap gap-2 mt-3">
                <span class="bg-amber-100 text-amber-800 text-xs px-2 py-1 rounded-full">Керамика</span>
                <span class="bg-stone-100 text-stone-600 text-xs px-2 py-1 rounded-full">Бронза</span>
            </div>
        </a>
        @endforeach
    </section>

    {{ $archObjects->withQueryString()->links() }}
@endsection
