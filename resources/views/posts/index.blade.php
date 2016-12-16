@extends('layouts.blog')

@section('title')
    @foreach($posts as $post)
        <p>  {{ $post->title }} </p>
        @if(!Auth::guest() && ($post->name == Auth::user()->id || Auth::user()->is_admin()))
            <button type="button" class="btn btn-default"><a href="{{ url('news.edit')}}">Editer</a></button>
        @endif
    @endforeach
@endsection

@section('title-meta')
    <p>  {{ $post->created_at }} </p>
    <p>Posté par {{ $post->name }}</p>
    <p class="text-right"><h12> Thème: {{ $post->theme }}</h12></p>

@endsection

@section('content')

    @foreach($posts as $post)
        <div>
            {!! $post->content !!}
        </div>


        <div class="panel-body">
        @if(Auth::guest())
            <p style="padding-top: 20px;"></p>
            <p class="bg-warning"> Connectez vous pour commenter </p>
        @else

                <form method="post" action="/comment/add">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="on_post" value="{{ $post->id }}">
                    <input type="hidden" name="slug" value="{{ $post->slug }}">
                    <div class="form-group">
                        <textarea required="required" placeholder="Entrer votre commentaire" name = "body" class="form-control"></textarea>
                    </div>
                    <input type="submit" name='post_comment' class="btn btn-default" value = "Commenter"/>
                </form>
                @if(Auth::user())
                    <p></p>
                <ul style="list-style: none; padding: 0">
                    <a class="btn btn-default" href={{route('news.edit', $post)}}>Editer</a>

                </ul>
                @endif

        @endif

        </div>
    @endforeach



@endsection












