@extends('layouts.main')
@section('content')
    <!-- О проекте -->
    <section id="about" class="text-center">
        <h2 class="text-3xl font-bold text-stone-800 mb-4">О проекте</h2>
        <p class="text-stone-600 max-w-2xl mx-auto">
            Этот сайт посвящён археологическим раскопкам, проводимым нашим бюро. Здесь вы найдёте информацию
            о местах раскопок, найденных артефактах, отчёты и фотографии. Мы стремимся сделать историю доступной
            каждому.
        </p>
    </section>

    <!-- Последние раскопки -->
    <section id="latest" class="">
        <h2 class="text-3xl font-bold text-stone-800 mb-8 text-center">Последние раскопки</h2>
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            <!-- Карточка раскопки -->
            <div class="bg-white rounded-2xl shadow p-4 border border-stone-200">
                <img src="https://via.placeholder.com/400x200" alt="Site image" class="rounded-xl mb-4">
                <h3 class="text-xl font-semibold text-amber-800">Раскопки у поселения Кызылоба</h3>
                <p class="text-sm text-stone-500">Август 2024</p>
                <p class="mt-2 text-stone-600">Найдены фрагменты керамики и остатки жилищ эпохи бронзы.</p>
            </div>

            <!-- Другая карточка -->
            <div class="bg-white rounded-2xl shadow p-4 border border-stone-200">
                <img src="https://via.placeholder.com/400x200" alt="Site image" class="rounded-xl mb-4">
                <h3 class="text-xl font-semibold text-amber-800">Могильник на берегу Амударьи</h3>
                <p class="text-sm text-stone-500">Июнь 2024</p>
                <p class="mt-2 text-stone-600">Обнаружены древние захоронения с уникальными погребальными дарами.</p>
            </div>

            <!-- Третья карточка -->
            <div class="bg-white rounded-2xl shadow p-4 border border-stone-200">
                <img src="https://via.placeholder.com/400x200" alt="Site image" class="rounded-xl mb-4">
                <h3 class="text-xl font-semibold text-amber-800">Городище Джетыасар</h3>
                <p class="text-sm text-stone-500">Март 2024</p>
                <p class="mt-2 text-stone-600">Изучена система укреплений и найдено множество артефактов.</p>
            </div>
        </div>
    </section>
    @if(false)
        <!-- Карта и фильтры -->
        <section id="map-filters" class="pt-16">
            <h2 class="text-3xl font-bold text-stone-800 mb-8 text-center">Карта раскопок и фильтры</h2>

            <!-- Фильтры -->
            <div class="mb-8 grid grid-cols-1 md:grid-cols-3 gap-4">
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
                    <option>Все типы находок</option>
                    <option>Керамика</option>
                    <option>Захоронения</option>
                    <option>Фундаменты</option>
                </select>
            </div>

            <!-- Карта (заглушка) -->
            <div class="rounded-2xl overflow-hidden border border-stone-300 shadow">
                <img src="https://via.placeholder.com/1200x500?text=Здесь+будет+карта" alt="Map placeholder" class="w-full h-auto">
            </div>
        </section>
    @endif

@endsection

