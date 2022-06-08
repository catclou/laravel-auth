@extends('layouts.app')

@section('content')

<div class="container d-flex flex-column justify-content-center align-items-center p-5 mb-5 text-light">
    <img src="{{$post->image}}" alt="{{$post->title}}" width="50%">
    <h1 class="m-3 mt-5">{{$post->title}}</h1>
    <span class="font-italic">Postato il {{ $post->created_at }}</span>
    <p class="lead m-3 mb-5 text-justify">{{$post->content}}</p>
</div>

@endsection