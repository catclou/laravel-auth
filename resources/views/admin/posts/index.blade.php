@extends('layouts.app')

@section('content')

    {{-- Alert di conferma eliminazione di un post --}}
    @if(session('message'))

        <div class="alert alert-danger">
            {{session('message')}}
        </div>

    @endif

    <div class="container">

        <a href="{{route('admin.posts.create')}}" class="btn btn-success m-1">Crea post</a>

        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Image</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->title }}</th>
                        <td>
                            <p>{{ $post->content }}</p>
                        </td>
                        <td>
                            <img src="{{ $post->image }}" alt="{{ $post->title }}" width="50">
                        </td>
                        <td>
                            <span>{{ $post->slug }}</span>
                        </td>
                        <td class="d-flex flex-column">
                            <a href="{{route('admin.posts.show', $post->id)}}" class="btn btn-primary m-1">View</a>
                            <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-warning m-1">Edit</a>
                            <form action="{{route('admin.posts.destroy', $post->id)}}" method="POST" class="delete-form" data-name="{{$post->title}}">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger m-1">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <h2>Non ci sono post</h2>
                @endforelse
                
                
            </tbody>
        </table>

    </div>

    

@endsection

@section('scripts')

        <script>

            const deleteForms = document.querySelectorAll('.delete-form');
            deleteForms.forEach(form => {
                const title = form.getAttribute('data-name');
                form.addEventListener('submit', (e) =>{
                    e.preventDefault();
                    const confirmation = confirm(`Sei sicuro di voler eliminare il post "${title}"?`);
                    if (confirmation) e.target.submit();
                });
            });

        </script>

@endsection