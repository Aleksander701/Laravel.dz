
@extends('main')

@section('title')
Новости
@endsection

@section('content')
 <body>
     <p>Страница категорий новостей</p>
  <p><a href="{{ route('news', 'sport')}}">Спорт</a></p>
  <p><a href="{{ route('news', 'science')}}">Наука</a></p>
  <p><a href="{{ route('news', 'technics')}}">Техника</a></p>
 </body>
@endsection
