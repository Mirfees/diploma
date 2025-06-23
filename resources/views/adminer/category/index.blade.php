@extends('layouts.admin')
@section('content')
    <div class="container py-5">
        <h1 class="mb-4">Список категорий</h1>
        <table class="table table-bordered table-hover">
            <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>Название</th>
                <th>Дата создания</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->title }}</td>
                    <td>{{ $category->created_at }}</td>
                    <td>
                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-sm btn-outline-primary">Редактировать</a>
                        <form action="{{ route('category.delete', $category->id) }}" method="post">
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
    {{ $categories->withQueryString()->links('pagination::bootstrap-5') }}
@endsection

