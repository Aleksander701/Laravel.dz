
<!-- Отредактировал файл в шаблон blade -->
@extends('main')

@section('title')
Новости
@endsection

@section('content')

@if ($categories == "sport")
     <p>Вы выбрали новости спорта</p>
    <p><a href="{{ route('one_news', 0)}}">Футбол</a></p>
    <p><a href="{{ route('one_news', 1)}}">Хоккей</a></p>
    <p><a href="{{ route('one_news', 2)}}">Биатлон</a></p>
    </body>
    @elseif ($categories == "science")
         <body>
     <p>Вы выбрали новости науки</p>
    <p><a href="{{ route('one_news', 3)}}">Университеты</a></p>
    <p><a href="{{ route('one_news', 4)}}">Лаборатории</a></p>
    <p><a href="{{ route('one_news', 5)}}">Открытия</a></p>
    </body>
    @elseif ($categories == "technics")
         <body>
     <p>Вы выбрали новости техники</p>
    <p><a href="{{ route('one_news', 6)}}">Машины</a></p>
    <p><a href="{{ route('one_news', 7)}}">Самолеты</a></p>
    <p><a href="{{ route('one_news', 8)}}">Лодки</a></p>
    </body>
@endif

 @endsection