@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista posts</h1>

        <table>
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

        @dump($posts)
    </div>
@endsection