@extends('main')

@section('title')
Меню
@endsection

@section('content')
 <body>
     <p>Страница приветствия будущего проекта</p>
  <p><a href="{{ route('auth')}}">Авторизация</a></p>
  <p><a href="{{ route('categories')}}">Страница новостей</a></p>
  <p><a href="{{ route('add_news')}}">Добавить новость</a></p>
 </body>
 @endsection

