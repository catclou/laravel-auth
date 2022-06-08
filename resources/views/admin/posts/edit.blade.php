@extends('layouts.app')

@section('content')

<main class="container text-light mb-5">

    <h1 class="text-center m-5">Modifica il post</h1>

    <form action="{{route('admin.posts.update', $post->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group d-flex flex-column">
    
            <label for="title">Titolo</label>
            <input type="text" class="form-control mb-4" id="title" name="title" placeholder="Titolo del post" value="{{ old('title', $post->title) }}">
    
            <label for="title">Content</label>
            <textarea class="form-control mb-4" id="content" name="content" cols="30" rows="10">{{ old('content', $post->content) }}</textarea>
    
            <label for="IMAGE">image url</label>
            <input type="url" class="form-control mb-4" id="image" name="image" placeholder="url dell'immagine" value="{{ old('image', $post->image) }}">
    
            <button type="submit" class="btn btn-success align-self-center mt-4 mb-5 w-25">Salva le modifiche</button>
        </div>
    </form>

</main>


@endsection