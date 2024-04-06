@extends('layouts.app')

@section('content')
    <div class="container">
        <button class="btn btn-primary my-4" href="{{route('')}}">
            Crea nuovo post
        </button>

        <h1 class="my-4">Lista posts</h1>
        <table class="table mb-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titolo</th>
                    <th>Categoria</th>
                    <th>Slug</th>
                    <th>Estratto</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @forelse($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->lable }}</td>
                    <td>{{ $post->slug }}</td>
                    <td>{{ $post->getAbstract(50) }}</td>
                </tr>
            </tbody>
        </table>
        {{ $posts->links('pagination::bootstrap-5' )}}

        @dump($posts)
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection