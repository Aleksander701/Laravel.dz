@extends('welcome')

@section('title')
@endsection

@section('content')
    Список новостей ниже:
    <br>
    @foreach($news as $item)
        {{ $item->id }}
        {{ $item->title }}
        <br>
        <a href="{{ route('admin::parser::update', $item->id) }}" class="">Редактировать новость № {{ $item->id }} </a>
        <br>
    @endforeach

@endsection