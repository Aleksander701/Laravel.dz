@extends('welcome')

@section('title')
    <a href="{{ route('admin::user')}}" style="text-decoration:revert;">
    В админку юзеров
    </a>
    <br>
    Создание пользователя
    <hr style="border: 1px solid black;">
@endsection


@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route($route, $user->id)}}" method="post">
    @csrf
   
    <label class="form-label">
       Имя пользователя
    </label>
    <div class="form-group">
        <input value="{{ old('name', isset($user) ? $user->name : null) }}" type="text" class="name" name ="name" style="border: 2px solid black;">
        
    </div>
    <label class="form-label">
        Мэйл пользователя
    </label>
    <div class="form-group">
        <input value="{{ old('email', isset($user) ? $user->email : null) }}" class="email" name="email" style="border: 2px solid black;">
    </div>
    <label class="form-label">
        Пароль пользователя
    </label> 
    <div class="form-group">
        <input class="password" name="password" style="border: 2px solid black;">
    </div>
    <div class="form-group">
        <button type="submit" name ="Save" value="Save">
            Создать
        </button>
    </div>

</form>

@endsection