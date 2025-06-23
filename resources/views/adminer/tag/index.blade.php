@extends('layouts.admin')
@section('content')
    <div class="container py-5">
        <h1 class="mb-4">Список тегов</h1>
        <table class="table table-bordered table-hover">
            <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>Название</th>
                <th>Дата создания</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tags as $tag)
                <tr>
                    <td>{{ $tag->id }}</td>
                    <td>{{ $tag->title }}</td>
                    <td>{{ $tag->created_at }}</td>
                    <td>
                        <a href="{{ route('tag.edit', $tag->id) }}" class="btn btn-sm btn-outline-primary">Редактировать</a>
                        <form action="{{ route('tag.delete', $tag->id) }}" method="post">
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
    {{ $tags->withQueryString()->links('pagination::bootstrap-5') }}
@endsection

