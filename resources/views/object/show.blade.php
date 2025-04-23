@extends('layouts.main')
@section('content')
    <!-- Заголовок -->
    <header>
        <h1 class="text-4xl font-bold text-amber-800">Раскопки у поселения Кызылоба</h1>
        <p class="text-stone-500 mt-2">Август 2024 &bull; Самаркандская область</p>
    </header>

    <!-- Информация -->
    <section class="grid grid-cols-1 sm:grid-cols-2 gap-6 text-stone-700">
        <div>
            <h2 class="text-lg font-semibold text-stone-800">Координаты</h2>
            <p>39.6543° N, 66.9750° E</p>
        </div>
        <div>
            <h2 class="text-lg font-semibold text-stone-800">Ответственные</h2>
            <p>Др. Сайёра Хамидова, проф. Алишер Рахимов</p>
        </div>
    </section>

    <!-- Описание -->
    <section>
        <h2 class="text-2xl font-bold text-stone-800 mb-4">Описание объекта</h2>
        <p class="text-stone-600 leading-relaxed">
            В ходе раскопок были обнаружены остатки жилищ, фрагменты посуды эпохи бронзы и элементы очагов.
            На глубине около 1,5 м обнаружен слой с обуглёнными костями и зольным осадком, предположительно —
            свидетельства обрядов кремации. Работа проводилась с использованием ручной техники и цифровой
            фотофиксации.
        </p>
    </section>

    <!-- Галерея -->
    <section>
        <h2 class="text-2xl font-bold text-stone-800 mb-4">Фотографии</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <img src="https://via.placeholder.com/600x400" alt="Фото 1" class="rounded-xl">
            <img src="https://via.placeholder.com/600x400" alt="Фото 2" class="rounded-xl">
        </div>
    </section>

    <!-- Архив документов -->
    <section>
        <h2 class="text-2xl font-bold text-stone-800 mb-4">Документы</h2>
        <ul class="list-disc list-inside text-stone-600">
            <li><a href="#" class="text-amber-700 hover:underline">Отчет по раскопкам (PDF, 2024)</a></li>
            <li><a href="#" class="text-amber-700 hover:underline">Фотокаталог находок</a></li>
        </ul>
    </section>

    <!-- Карта -->
    <section>
        <h2 class="text-2xl font-bold text-stone-800 mb-4">Расположение на карте</h2>
        <div class="rounded-2xl overflow-hidden border border-stone-300 shadow">
            <img src="https://via.placeholder.com/1200x400?text=Карта+объекта" alt="Map placeholder" class="w-full h-auto">
        </div>
    </section>
@endsection
