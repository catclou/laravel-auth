@extends('layouts.app')

@section('content')

<div class="container">
    <img src="{{$post->image}}" alt="{{$post->title}}" width="50%">
    <h2>{{$post->title}}</h2>
    <p>{{$post->content}}</p>
</div>

@endsection