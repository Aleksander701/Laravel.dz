@extends('welcome')

@section('title')
    <a href="{{ route('admin::index')}}" style="text-decoration:revert;">
    {{ __('tagsHtml.adminPanel') }}
    </a>
    <br>
    {{ __('tagsHtml.actionOnPage') }}
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

<form action="{{route($route, $news->id)}}" method="post">
    @csrf
    <div class="form-group">
    <label class="form-label">
    {{ __('tagsHtml.category_name') }}
    </label>
    <br>
    {!! Form::select('category_id', $categories, $news->category_id)  !!}
    <div class="form-group">
        <input type="hidden" name="active" value="0">
        <label>
            {!! Form::checkbox('active', 1, $news->active) !!}
            Active
        </label>
    </div>
    <label class="form-label">
        {{ __('tagsHtml.title') }}
    </label>
    <div class="form-group">
        <input value="{{ old('title', isset($news) ? $news->title : null) }}" type="text" class="title" name ="title" style="border: 2px solid black;">
        
    </div>
    <label class="form-label">
    {{ __('tagsHtml.content') }}
    </label>
    <div class="form-group">
        <textarea value="{{ old('content', isset($news) ? $news->content : null) }}" class="content" name="content" style="border: 2px solid black;"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" name ="Save" value="Save">
        {{ __('tagsHtml.btnSubmit') }}
        </button>
        <!-- <input type="submit" > -->
    </div>

</form>

@endsection