@extends('layouts.admin')
@section('content')
    <div class="container py-5">
        <h1 class="mb-4">Список постов </h1>
        <table class="table table-bordered table-hover">
            <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>Название</th>
                <th>Расположение</th>
                <th>Дата создания</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->place }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>
                        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-sm btn-outline-primary">Редактировать</a>
                        <form action="{{ route('post.delete', $post->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-sm btn-outline-danger" type="submit" value="Удалить">
                        </form>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
    {{ $posts->withQueryString()->links('pagination::bootstrap-5') }}
@endsection
