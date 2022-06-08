@extends('layouts.app')

@section('content')

<main class="container text-light mb-5">

    <h1 class="text-center m-5">Crea un nuovo post</h1>
    
    <form action="{{route('admin.posts.store')}}" method="POST" class="m-5">
        @csrf
        <div class="form-group d-flex flex-column">
    
            <label for="title">Titolo</label>
            <input type="text" class="form-control mb-4" id="title" name="title" placeholder="Titolo del post">
    
            <label for="title">Contenuto</label>
            <textarea class="form-control mb-4" id="content" name="content" cols="30" rows="10" placeholder="Contenuto del post"></textarea>
    
            <label for="IMAGE">Immagine</label>
            <input type="url" class="form-control mb-4" id="image" name="image" placeholder="url dell'immagine">
    
            <button type="submit" class="btn btn-success align-self-center mt-4 mb-3 w-25">Crea</button>
        </div>
    </form>

</main>


@endsection