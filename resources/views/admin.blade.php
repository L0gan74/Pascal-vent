@extends('main')

@section('title')
    Админ
@endsection

@section('content')
    <section class="admin-wrapper">
        @foreach ($data as $item)
            <div class="admin-item">
                <p><b>Имя: </b>{{ $item->name }}</p>
                <p><b>Телефон: </b><a href="tel:{{ $item->tel }}">{{ $item->tel }}</a></p>
            </div>
        @endforeach
    </section>
@endsection
