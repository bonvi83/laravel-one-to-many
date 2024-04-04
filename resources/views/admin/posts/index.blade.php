@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista posts</h1>

        @dump($posts)
    </div>
@endsection