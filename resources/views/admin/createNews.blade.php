@extends('welcome')

@section('title')
    <a href="{{ route('admin::index')}}" style="text-decoration:revert;"> Админ панель </a>
    <br>
    Создать новость/Редактировать новость
    <hr style="border: 1px solid black;">
@endsection


@section('content')

<form action="{{route($route, $news->id)}}" method="post">
    @csrf
    <label class="form-label">
        Название новости
    </label>
    <div class="form-group">
        <input type="text" class="title" name ="title" style="border: 2px solid black;">

    </div>
    <label class="form-label">
        Содержание
    </label>
    <div class="form-group">
        <textarea class="content" name="content" style="border: 2px solid black;"></textarea>
    </div>
    <div class="form-group">
        <input type="submit">
    </div>

</form>

@endsection