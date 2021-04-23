@extends('layouts.default')

@section('title', 'Blog Posts')

@section('content')
<h1>
  <a href="{{ url('/posts/create') }}" class="header-menu">New Post</a>
  Blog Posts
</h1>
<ul>
  <!-- ForEach -->
  {{--
  @foreach ($posts as $post)
  <li><a href="">{{ $post->title }}</a></li>
  @endforeach
  --}}

  @forelse ($posts as $post)
  <li>
    <!-- Implicit Binding を使わないパターン -->
    {{--
      <li><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></li>
    --}}


    <!-- url を使う場合 -->
    {{--
      <li><a href="{{ url('/posts', $post->id) }}">{{ $post->title }}</a></li>
    --}}


    <!-- action を使う場合 -->
    {{--
      <li><a href="{{ action('PostsController@show', $post->id) }}">{{ $post->title }}</a></li>
    --}}


                                          <!--  ↓Implicit Binding （） -->
                                          <!--  Route::get('/posts/{id}'　　→　　Route::get('/posts/{post}'　に変更。 -->
                                          <!--  引数を　show($id)　→　show(Post $post) 　に変更。 -->
                                          <!-- こうすると、$post->id としなくても、明示しなくても、id を渡す事ができる。 -->
    <a href="{{ action('PostsController@show', $post) }}">{{ $post->title }}</a>


    <a href="{{ action('PostsController@edit', $post) }}" class="edit">[Edit]</a>


    <a href="#" class="del" data-id="{{ $post->id }}">[x]</a>


    <form method="post" action="{{ url('/posts', $post->id) }}" id="form_{{ $post->id }}">
      {{ csrf_field() }}
      {{ method_field('delete') }}
    </form>
  </li>
  @empty
  <!-- forelse を使うと、empty（空だった場合の挙動）を指定できる -->
  <li>No posts yet</li>
  @endforelse
</ul>
<script src="/js/main.js"></script>
@endsection