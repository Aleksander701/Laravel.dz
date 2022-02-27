@extends('welcome')


@section('content')

@foreach($news as $oneNews)

{{ $oneNews->title }}
<br>

@endforeach


@endsection