@extends('layouts.blog')


@section('title')

    @foreach($posts as $post)
        {{ $post->title }}
        @if(!Auth::guest() && ($post->author_id == Auth::user()->id || Auth::user()->is_admin()))
            <button type="button" class="btn btn-default"><a href="{{ url('news.edit')}}">Editer</a></button>
        @endif
    @endforeach
@endsection

@section('title-meta')
    <p> {{ $post->created_at }} Posté par {{ $post->name }} </p>
@endsection

@section('content')

    @foreach($posts as $post)
        <div>
            {!! $post->content !!}
        </div>
        <div>
            <h2>Commenter</h2>
        </div>
        @if(Auth::guest())
            <p>Se connecter pour commenter</p>
        @else
            <div class="panel-body">
                <form method="post" action="/comment/add">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="on_post" value="{{ $post->id }}">
                    <input type="hidden" name="slug" value="{{ $post->slug }}">
                    <div class="form-group">
                        <textarea required="required" placeholder="Entrer votre commentaire" name = "body" class="form-control"></textarea>
                    </div>
                    <input type="submit" name='post_comment' class="btn btn-default" value = "Commenter"/>
                </form>
            </div>
        @endif
    @endforeach
    <div>

        <ul style="list-style: none; padding: 0">
            <a class="btn btn-default" href={{route('news.edit', $post)}}>Editer</a>

        </ul>

    </div>

@endsection


