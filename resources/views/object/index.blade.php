@extends('layouts.main')
@section('content')
    <!-- Заголовок -->
    <header class="text-center">
        <h1 class="text-4xl font-bold text-stone-800">Архив объектов</h1>
        <p class="text-stone-500 mt-2">Все зафиксированные археологические раскопки</p>
    </header>

    <!-- Фильтры и сортировка -->
    <section class="grid grid-cols-1 md:grid-cols-4 gap-4">
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
        <a href="#" class="bg-white border border-stone-200 rounded-2xl shadow p-4 hover:shadow-lg transition">
            <img src="https://via.placeholder.com/400x200" alt="Кызылоба" class="rounded-xl mb-4">
            <h3 class="text-xl font-semibold text-amber-800">Кызылоба</h3>
            <p class="text-sm text-stone-500">Самарканд, 2024</p>
            <p class="text-stone-600 mt-2">Фрагменты керамики, бронзовые изделия, остатки жилищ.</p>
            <div class="flex flex-wrap gap-2 mt-3">
                <span class="bg-amber-100 text-amber-800 text-xs px-2 py-1 rounded-full">Керамика</span>
                <span class="bg-stone-100 text-stone-600 text-xs px-2 py-1 rounded-full">Бронза</span>
            </div>
        </a>

        <!-- Объект 2 -->
        <a href="#" class="bg-white border border-stone-200 rounded-2xl shadow p-4 hover:shadow-lg transition">
            <img src="https://via.placeholder.com/400x200" alt="Амударья" class="rounded-xl mb-4">
            <h3 class="text-xl font-semibold text-amber-800">Могильник на Амударье</h3>
            <p class="text-sm text-stone-500">Хорезм, 2024</p>
            <p class="text-stone-600 mt-2">Древние захоронения и погребальные дары.</p>
            <div class="flex flex-wrap gap-2 mt-3">
                <span class="bg-amber-100 text-amber-800 text-xs px-2 py-1 rounded-full">Захоронения</span>
                <span class="bg-stone-100 text-stone-600 text-xs px-2 py-1 rounded-full">Артефакты</span>
            </div>
        </a>

        <!-- Объект 3 -->
        <a href="#" class="bg-white border border-stone-200 rounded-2xl shadow p-4 hover:shadow-lg transition">
            <img src="https://via.placeholder.com/400x200" alt="Джетыасар" class="rounded-xl mb-4">
            <h3 class="text-xl font-semibold text-amber-800">Городище Джетыасар</h3>
            <p class="text-sm text-stone-500">Кызылорда, 2023</p>
            <p class="text-stone-600 mt-2">Система укреплений, найденные артефакты, фундаменты зданий.</p>
            <div class="flex flex-wrap gap-2 mt-3">
                <span class="bg-amber-100 text-amber-800 text-xs px-2 py-1 rounded-full">Фундаменты</span>
                <span class="bg-stone-100 text-stone-600 text-xs px-2 py-1 rounded-full">Укрепления</span>
            </div>
        </a>
    </section>

    <!-- Пагинация -->
    <nav class="flex justify-center pt-10">
        <ul class="inline-flex items-center space-x-2 text-stone-700">
            <li><a href="#" class="px-3 py-1 border border-stone-300 rounded-lg hover:bg-stone-100">Назад</a></li>
            <li><a href="#" class="px-3 py-1 bg-amber-200 text-amber-800 rounded-lg font-semibold">1</a></li>
            <li><a href="#" class="px-3 py-1 border border-stone-300 rounded-lg hover:bg-stone-100">2</a></li>
            <li><a href="#" class="px-3 py-1 border border-stone-300 rounded-lg hover:bg-stone-100">3</a></li>
            <li><a href="#" class="px-3 py-1 border border-stone-300 rounded-lg hover:bg-stone-100">Вперёд</a></li>
        </ul>
    </nav>
@endsection
