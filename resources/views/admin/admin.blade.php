@extends('adminlte::page')

@section('title', 'Заявки')

@section('content_header')
    <h1>Заявки</h1>
@stop

@section('content')
    <table class="table table-bordered table-striped mx-auto text-break text-center">
        <thead>
            <tr>
                <th>id</th>
                <th>Телефон</th>
                <th>Имя</th>
                <th>Время</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="tel:{{ $item->tel }}">{{ $item->tel }}</a></td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
