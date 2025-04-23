@extends('layouts.main')
@section('content')
    <div>
        <div>{{ $post->id }}. {{ $post->title }}</div>
        <div class="mb-12">{{ $post->content }}</div>

        <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" href="{{ route('post.edit', $post->id) }}">EDIT</a>
    </div>

@endsection
