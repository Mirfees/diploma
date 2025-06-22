<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('build/assets/app-COA4iO29.css') }}">
    <script src="https://api-maps.yandex.ru/2.1/?apikey=c59421ed-14ae-4040-aa11-22c7766b5baa&lang=ru_RU" type="text/javascript">
    </script>
    @vite('resources/css/app.css')
    <?php $title = isset($title) ? $title : 'Diploma'; ?>
    <title>{{ $title }}</title>
</head>
<body class="bg-gray-50">
<main class="max-w-6xl mx-auto px-4 py-10 space-y-16">
        <div>
            <nav class="bg-gray-800">
                <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                    <div class="relative flex h-16 items-center justify-between">
                        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                            <div class="hidden sm:ml-6 sm:block">
                                <div class="flex space-x-4">
                                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                    <a href="/" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white" aria-current="page">Главная</a>
                                    <a href="{{ route('arch_object.index') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Объекты</a>
                                    <a href="{{ route('post.index') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Блог</a>
                                    @can('view', auth()->user())
                                        <a href="{{ route('admin.index') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Adminer</a>
                                    @endcan
                                </div>
                            </div>
                            <div class="flex flex-1 justify-content-end">
                                <!-- Поисковая форма -->
                                @if (!auth()->user())
                                    <a href="/login" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white" aria-current="page">Войти / Зарегистрироваться</a>
                                @endif

                                @can('view', auth()->user())
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white" aria-current="page">Выйти</button>
                                    </form>

                                @endcan
                                <form action="/search" method="GET" class="ml-auto">
                                    <div class="relative text-gray-400 focus-within:text-white">
                                        <input
                                            type="text"
                                            name="q"
                                            class="bg-gray-700 text-sm text-white placeholder-gray-400 rounded-md pl-3 pr-10 py-2 focus:outline-none focus:bg-gray-600 focus:ring-2 focus:ring-white"
                                            placeholder="Поиск..."
                                        />
                                        <button type="submit" class="absolute right-0 top-0 mt-2 mr-3">
                                            <svg class="h-4 w-4 fill-current" viewBox="0 0 20 20">
                                                <path d="M12.9 14.32a8 8 0 111.41-1.41l4.39 4.39-1.41 1.41-4.39-4.39zM8 14a6 6 0 100-12 6 6 0 000 12z" />
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile menu, show/hide based on menu state. -->
                <div class="sm:hidden" id="mobile-menu">
                    <div class="space-y-1 px-2 pt-2 pb-3">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="/" class="block rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white" aria-current="page">Главная</a>
                        <a href="{{ route('arch_object.index') }}" class="block rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Объекты</a>
                        <a href="{{ route('post.index') }}" class="block rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Блог</a>
                        @can('view', auth()->user())
                            <a href="{{ route('admin.index') }}" class=" block rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Adminer</a>
                        @endcan
                    </div>
                </div>

            </nav>
        </div>
        @yield('content')
</main>

<footer class="bg-stone-100 mt-20 border-t border-stone-300">
    <div class="max-w-6xl mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-3 gap-8">
        <nav class="space-y-2 text-stone-700">
            <h4 class="font-semibold text-stone-800">Навигация</h4>
            <ul class="space-y-1">
                <li><a href="/arch_objects" class="hover:underline">Объекты</a></li>
                <li><a href="/posts" class="hover:underline">Блог</a></li>
                <li><a href="/" class="hover:underline">О проекте</a></li>
                <li><a href="#" class="hover:underline">Контакты</a></li>
            </ul>
        </nav>

        <div class="text-stone-600 text-sm">
            <p>&copy; 2025 Институт археологических исследований Павлодарского педагогического университета им. А. Маргулана. Все права защищены.</p>
        </div>

        <div class="text-stone-600">
            <h4 class="font-semibold text-stone-800 mb-1">Наш адрес</h4>
            <p>г. Павлодар, ул. Астана 151/1, 12<br>Казахстан</p>
        </div>
    </div>
</footer>

</body>
</html>
