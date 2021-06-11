@extends('layout')

@section('content')
<h1> Posts </h1>
@foreach($posts as $post)
<div>
<h2>{{ $post['title'] }}</h2>
<p>{{ $post['post_desc'] }}</p>
<span>{{ $post['author'] }}</span>
</div>


@endforeach
@endsection