@extends('adminlte::page')

@section('title', 'Добавить клиента')

@section('content_header')
    <h1>Добавить клиента</h1>
@stop

@section('content')

    <table class="table table-bordered table-striped mx-auto text-break text-center">
        <thead>
            <tr>
                <th>id</th>
                <th>photo</th>
                <th>title</th>
                <th>text</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><img src="{{ url('/') . '/storage/' . $item->photo }}" alt="img" style="width:50px;height:50px;">
                    </td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->text }}</td>
                    <td>
                        <a class="btn btn-success" href="{{ url('/admin/updatePortfolio') }}/{{ $item->id }}">Edit</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="{{ url('/admin/deletePortfolio') }}/{{ $item->id }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
