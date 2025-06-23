@extends('layouts.main')
@section('content')
    <div>
        <div>{{ $post->id }}. {{ $post->title }}</div>
        <div class="mb-12">{{ $post->content }}</div>
        <div class="mt-6 mb-6">
            <!-- Категория -->
            <div class="mb-4">
                <h3 class="text-sm font-medium text-gray-500">Категория:</h3>
                <span class="inline-block mt-1 px-3 py-1 rounded-full bg-indigo-100 text-indigo-700 text-sm font-semibold">
            {{ $post->category->title }}
        </span>
            </div>

            <!-- Теги -->
            <div>
                <h3 class="text-sm font-medium text-gray-500">Теги:</h3>
                <div class="mt-2 flex flex-wrap gap-2">
                    @foreach($post->tags as $tag)
                        <span class="inline-block px-3 py-1 rounded-full bg-gray-100 text-gray-700 text-sm">
                    {{ $tag->title }}
                </span>
                    @endforeach
                </div>
            </div>
        </div>
        <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" href="{{ route('post.edit', $post->id) }}">EDIT</a>
    </div>

@endsection
