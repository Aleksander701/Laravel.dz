@extends('welcome')

@section('title')
    <a href="{{ route('admin::category::create')}}" style="text-decoration:revert;"> Создать категорию </a>
    <br>
@endsection


@section('content')

    Это панель администратора ! :)
    <br>
    Список категорий:
    <br>
    @foreach($data as $id => $category)
      @foreach($category as $title)
        {{ $title }}
      @endforeach
    @endforeach

@endsection