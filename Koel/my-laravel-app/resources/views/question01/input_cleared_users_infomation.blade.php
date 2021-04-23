@extends('layouts.default')

@section('title', 'Blog Posts')

@section('content')

  <div class='page-header'>
    <h2>Wow! You must be a great software engineer!</h2>
    <h2>Please leave your comment.</h2>
  </div>

  <hr>
  <div class='form-horizontal' role='form'>
    <form method='post' accept-charset='UTF-8' action='{{action('Question01Controller@reflectClearedUserInputData')}}'>
    {{ csrf_field() }}
    {{ method_field('patch') }}

      <input type='hidden' name='id' value='{{ $registration_information->id }}'>
      <div class='form-group'>
        <label for='user_name'>Name</label>
        <input class='form-control' type='text' value="{{ $registration_information->name }}" name='name' id='name' />
      </div>
      @if ($errors->has('name'))
        <span class="error">{{ $errors->first('name') }}</span>
      @else
        <span>&nbsp;</span>
      @endif
      <div>
      <div>
      <br>

      <div class='form-group'><label for='user_comment'>Comment</label>
        <textarea class='form-control' name='comment' id='comment'></textarea>
      </div>

      @if ($errors->has('comment'))
        <span class="error">{{ $errors->first('comment') }}</span>
      @else
        <span>&nbsp;</span>
      @endif
      <div>
      <div>

      <br>
      <div>
        <input type='submit' name='commit' value='Submit' class='btn btn-success' />
      </div>
    </form>
  </div>
<div>
@endsection