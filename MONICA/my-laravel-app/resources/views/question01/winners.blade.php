@extends('layouts.default')

@section('title', 'Blog Posts')

@section('content')

@if (session('special_message'))
  <div>
    {{ session('special_message') }}
  </div>
@endif

<div>
    <a href="{{ action('Question01Controller@index') }}" class="header-menu">Back</a>
</div>
<hr>

<div style="text-align: center;">
    <h2>The Winners</h2>
    <h3>Let's share your winning</h3>

    <div class="social-button-item">
        <a
            href="https://twitter.com/share"
            class="twitter-share-button"
            data-url="http://example.com/"
            data-text="I did it!">Tweet
        </a>
    </div>
    </div>
<hr>

<div>
    <div style="text-align: center;">
        <table>
            <tr>
                <th>No.</th>
                <th>Date</th>
                <th>Name</th>
                <th>Comment</th>
            </tr>

            @foreach ($cleared_users as $cleared_user)
                <tr>
                <td>{{ $cleared_user->id }}</td>
                <td>{{ $cleared_user->created_at }}</td>
                <td>{{ $cleared_user->name }}</td>
                <td>{{ $cleared_user->comment }}</td>
                </tr>
            @endforeach
        </table>
        {{$cleared_users->links()}}
    </div>
</div>



@endsection