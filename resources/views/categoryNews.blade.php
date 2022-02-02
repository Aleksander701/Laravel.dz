@@ -1,11 +1,14 @@
@extends('welcome')


@section('content')

@forelse($response as $id => $item)
<a href="{{ route('news::showCategory', ['id' => $id]) }}"> <div> {!! $item !!} </div> </a>
@emptyы
News not found!
@endforelse
@foreach($news as $oneNews)

{{ $oneNews->title }}
<br>

@endforeach


@endsection 