@extends('welcome')

@section('title')
    Это панель администратора ! :)
    <br>
    <a href="{{ route('admin::news::create')}}"> Создать новость </a>
    <br>
@endsection


@section('content')
    Список новостей ниже:
    <br>
    @foreach($news as $item)
        {{ $item->id }}
        {{ $item->title }}
        <br>
        <a href="{{ route('admin::news::update', $item->id) }}" class="">Редактировать новость № {{ $item->id }} </a>
        <br>
        <a href="{{ route('admin::news::delete', $item->id) }}" class="">Удалить новость № {{ $item->id }} </a>
        <br>
    @endforeach

@endsection