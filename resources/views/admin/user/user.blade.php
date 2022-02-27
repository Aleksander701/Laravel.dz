@extends('welcome')

@section('title')
    <a href="{{ route('admin::index')}}"> Назад в админку </a>
    <br>
    <a href="{{ route('admin::user::create')}}"> Создать пользователя </a>
    <br>
@endsection


@section('content')

@foreach($users as $user)
    {{ $user->name }}
    <br>
    <a href="{{ route('admin::user::update', $user->id) }}" class="">Редактировать юзера № {{ $user->id }} </a>
    <br>
@endforeach

@endsection