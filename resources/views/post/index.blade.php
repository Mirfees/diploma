@extends('layouts.main')
@section('content')
    <!-- Заголовок -->
    <header class="text-center">
        <h1 class="text-4xl font-bold text-stone-800">Архив объектов</h1>
        <p class="text-stone-500 mt-2">Все зафиксированные археологические раскопки</p>
    </header>

    <!-- Фильтры и сортировка -->
    <section style="display: none" class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <select class="border border-stone-300 rounded-xl px-4 py-2 text-stone-700">
            <option>Все регионы</option>
            <option>Самарканд</option>
            <option>Хорезм</option>
            <option>Фергана</option>
        </select>
        <select class="border border-stone-300 rounded-xl px-4 py-2 text-stone-700">
            <option>Все годы</option>
            <option>2025</option>
            <option>2024</option>
            <option>2023</option>
        </select>
        <select class="border border-stone-300 rounded-xl px-4 py-2 text-stone-700">
            <option>Тип находок</option>
            <option>Керамика</option>
            <option>Захоронения</option>
            <option>Фундаменты</option>
        </select>
        <select class="border border-stone-300 rounded-xl px-4 py-2 text-stone-700">
            <option>Сортировка</option>
            <option>По дате (новые)</option>
            <option>По дате (старые)</option>
            <option>По алфавиту</option>
        </select>
    </section>

    <!-- Сетка объектов -->
    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Объект 1 -->
        @foreach($posts as $post)

            <a href="{{ route('post.show', $post->id) }}" class="bg-white border border-stone-200 rounded-2xl shadow p-4 hover:shadow-lg transition">
                <img src="https://via.placeholder.com/400x200" alt="Кызылоба" class="rounded-xl mb-4">
                <h3 class="text-xl font-semibold text-amber-800">{{ $post->title }}</h3>
                <p class="text-stone-600 mt-2">{{ $post->content }}</p>
                <div class="flex flex-wrap gap-2 mt-3">
                    @foreach($post->tags as $tag)
                        <span class="bg-amber-100 text-amber-800 text-xs px-2 py-1 rounded-full">{{ $tag->title }}</span>
                    @endforeach
                </div>
            </a>
        @endforeach
    </section>

    <!-- Пагинация -->
    {{ $posts->withQueryString()->links() }}
@endsection
