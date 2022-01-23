@extends('welcome')

@section('content')

@forelse($response as $id => $item)
<a href="{{ route('news::showCategory', ['id' => $id]) }}"> <div> {!! $item !!} </div> </a>
@empty
News not found!
@endforelse

@endsection