@extends('layouts.admin')
@section('content')
    <div class="container py-5">
        <h1 class="mb-4">Список объектов</h1>
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
            @foreach($archObjects as $object)
                <tr>
                    <td>{{ $object->id }}</td>
                    <td>{{ $object->title }}</td>
                    <td>{{ $object->place }}</td>
                    <td>{{ $object->created_at }}</td>
                    <td>
                        <a href="{{ route('arch_object.edit', $object->id) }}" class="btn btn-sm btn-outline-primary">Редактировать</a>
                        <a href="#" class="btn btn-sm btn-outline-danger">Удалить</a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
    {{ $archObjects->withQueryString()->links() }}
@endsection
