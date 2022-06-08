@extends('layouts.app')

@section('content')

<form action="{{route('admin.posts.update', $post->id)}}" method="POST">
    @method('PUT')
    @csrf
    <div class="form-group">

        <label for="title">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Titolo del post" value="{{ old('title', $post->title) }}">

        <label for="title">Content</label>
        <textarea class="form-control" id="content" name="content" cols="30" rows="10">{{ old('content', $post->content) }}</textarea>

        <label for="IMAGE">image url</label>
        <input type="url" class="form-control" id="image" name="image" placeholder="url dell'immagine" value="{{ old('image', $post->image) }}">

        <button type="submit" class="btn btn-success">Crea</button>
    </div>



</form>

@endsection