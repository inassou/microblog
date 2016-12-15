@extends('layouts.app')

@section('content')

    @foreach($posts as $post)

        <h1>{{ $post->title }}</h1>
        <p> {{ $post ->content }}</p>
        <h4> écrit par:  {{ $post->name }}</h4>


        <p> <a class="btn btn-primary" href="{{route('news.edit', $post) }}">Editer</a></p>

    @endforeach

    <p> <a class="btn btn-primary" href="{{route('news.create', $post) }}">Nouvel article</a></p>
@stop

