@extends('layouts.default')

@section('title', 'New Post')

@section('content')
<h1>
  <a href="{{ url('/') }}" class="header-menu">Back</a>
  New Post
</h1>

<!-- ↓<form method="post" action="http://localhost:8000/posts">  こんな感じの html要素を生成 -->
<form method="post" action="{{ url('/posts') }}">
  {{ csrf_field() }}
  <p>
                                                              <!-- old ヘルパーを指定すると、Validationエラー時に、元の値を保持する -->
    <input type="text" name="title" placeholder="enter title" value="{{ old('title') }}">
    <!-- Validation Error Message -->
    @if ($errors->has('title'))
      <span class="error">{{ $errors->first('title') }}</span>
    @endif
  </p>
  <p>
    <textarea name="body" placeholder="enter body">{{ old('body') }}</textarea>
    @if ($errors->has('body'))
    <span class="error">{{ $errors->first('body') }}</span>
    @endif
  </p>
  <p>
    <input type="submit" value="Add">
  </p>
</form>
@endsection