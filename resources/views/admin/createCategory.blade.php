@extends('welcome')

@section('title')
    <a href="{{ route('admin::index')}}" style="text-decoration:revert;"> Админка категорий </a>
    <br>
    Создание категории
@endsection


@section('content')

<form action="{{route('admin::category::create')}}" method="post">
    @csrf
    <label class="form-label">
        Название категории
    </label>
    <div class="form-group">
        <input type="text" class="title" style="border: 2px solid black;">
    </div>
    <div class="form-group">
        <input type="submit">
    </div>
</form>

@endsection