@extends('layouts.app')

@section('content')

<form action="{{route('admin.posts.store')}}" method="POST">
    @csrf
    <div class="form-group">

        <label for="title">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Titolo del post">

        <label for="title">Content</label>
        <textarea class="form-control" id="content" name="content" cols="30" rows="10" placeholder="Contenuto del post"></textarea>

        <label for="IMAGE">image</label>
        <input type="url" class="form-control" id="image" name="image" placeholder="url dell'immagine">

        <button type="submit" class="btn btn-success">Crea</button>
    </div>



</form>

@endsection