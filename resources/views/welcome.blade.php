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
            @foreach($archObjects as $archObject)
                <a href="{{ route('arch_object.show', $archObject->id) }}" class="bg-white border border-stone-200 rounded-2xl shadow p-4 hover:shadow-lg transition">
                    <img src="{{ asset('storage/' . $archObject->image) }}" alt="Кызылоба" class="rounded-xl mb-4">
                    <h3 class="text-xl font-semibold text-amber-800">{{ $archObject->title }}</h3>
                    <p class="text-sm text-stone-500">{{ $archObject->place }}</p>
                    <p class="text-stone-600 mt-2">{{ $archObject->excerpt }}</p>
                    <div style="display: none" class="flex flex-wrap gap-2 mt-3">
                        <span class="bg-amber-100 text-amber-800 text-xs px-2 py-1 rounded-full">Керамика</span>
                        <span class="bg-stone-100 text-stone-600 text-xs px-2 py-1 rounded-full">Бронза</span>
                    </div>
                </a>
            @endforeach
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

