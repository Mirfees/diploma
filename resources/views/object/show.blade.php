@extends('layouts.main')
@section('content')
    <!-- Заголовок -->
    <header>
        <h1 class="text-4xl font-bold text-amber-800">{{ $archObject->title }}</h1>
        <p class="text-stone-500 mt-2">{{ $archObject->place }}</p>
        @can('view', auth()->user())
            <a href="{{ route('arch_object.edit', $archObject->id) }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Редактировать</a>
        @endcan
    </header>

    <img src="{{ asset('storage/' . $archObject->image) }}" alt="{{ $archObject->title }}" class="rounded-xl mb-4">

    <!-- Информация -->
    <section class="grid grid-cols-1 sm:grid-cols-2 gap-6 text-stone-700">
        @if($archObject->longitude && $archObject->attitude)
            <div>
                <h2 class="text-lg font-semibold text-stone-800">Координаты</h2>
                <p>{{ $archObject->longitude }}° N, {{ $archObject->attitude }}° E</p>
            </div>
        @endif

        <div>
            <h2 class="text-lg font-semibold text-stone-800">Руководитель</h2>
            <p>{{ $archObject->director }}</p>
        </div>
    </section>

    <!-- Описание -->
    <section>
        <h2 class="text-2xl font-bold text-stone-800 mb-4">Описание объекта</h2>
        <p class="text-stone-600 leading-relaxed">
          {{ $archObject->content }}
        </p>
    </section>

    <div class="mt-6">
        <!-- Категория -->
        <div class="mb-4">
            <h3 class="text-sm font-medium text-gray-500">Категория:</h3>
            <span class="inline-block mt-1 px-3 py-1 rounded-full bg-indigo-100 text-indigo-700 text-sm font-semibold">
            {{ $archObject->category->title }}
        </span>
        </div>

        <!-- Теги -->
        <div>
            <h3 class="text-sm font-medium text-gray-500">Теги:</h3>
            <div class="mt-2 flex flex-wrap gap-2">
                @foreach($archObject->tags as $tag)
                    <span class="inline-block px-3 py-1 rounded-full bg-gray-100 text-gray-700 text-sm">
                    {{ $tag->title }}
                </span>
                @endforeach
            </div>
        </div>
    </div>


    <!-- Архив документов -->
    <section>
        <h2 class="text-2xl font-bold text-stone-800 mb-4">Документы</h2>
        <ol class="list-inside text-stone-600">
            @if($archObject->documents)
                @foreach($archObject->documents as $document)
                    @if(!empty($document))
                        <li><a href="{{ asset('storage/' . $document) }}" class="text-amber-700 hover:underline">Документ</a></li>
                    @endif
                @endforeach
            @endif
        </ol>
    </section>

    <!-- Карта -->
    <section>
        <h2 class="text-2xl font-bold text-stone-800 mb-4">Расположение на карте</h2>
        <div class="rounded-2xl overflow-hidden border border-stone-300 shadow">
            <div id="map" style="width: 100%; height: 400px"></div>
        </div>
    </section>
    <script type="text/javascript">
        // Функция ymaps.ready() будет вызвана, когда
        // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
        ymaps.ready(init);
        function init(){
            // Создание карты.
            var myMap = new ymaps.Map("map", {
                // Координаты центра карты.
                // Порядок по умолчанию: «широта, долгота».
                // Чтобы не определять координаты центра карты вручную,
                // воспользуйтесь инструментом Определение координат.
                center: [{{$archObject->attitude}}, {{$archObject->longitude}}],
                // Уровень масштабирования. Допустимые значения:
                // от 0 (весь мир) до 19.
                zoom: 7
            });

            // Создание геообъекта с типом точка (метка).
            var myGeoObject = new ymaps.GeoObject({
                geometry: {
                    type: "Point", // тип геометрии - точка
                    coordinates: [{{$archObject->attitude}}, {{$archObject->longitude}}]// координаты точки
                }
            });

            myMap.geoObjects.add(myGeoObject);
        }

    </script>
@endsection
