<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('build/assets/app-COA4iO29.css') }}">
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
                        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                            <!-- Mobile menu button-->
                            <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:outline-hidden focus:ring-inset" aria-controls="mobile-menu" aria-expanded="false">
                                <span class="absolute -inset-0.5"></span>
                                <span class="sr-only">Open main menu</span>
                                <!--
                                  Icon when menu is closed.

                                  Menu open: "hidden", Menu closed: "block"
                                -->
                                <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>
                                <!--
                                  Icon when menu is open.

                                  Menu open: "block", Menu closed: "hidden"
                                -->
                                <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
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
                        </div>
                    </div>
                </div>

                <!-- Mobile menu, show/hide based on menu state. -->
                <div class="sm:hidden" id="mobile-menu">
                    <div class="space-y-1 px-2 pt-2 pb-3">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="#" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Dashboard</a>
                        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Team</a>
                        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Projects</a>
                        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Calendar</a>
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
