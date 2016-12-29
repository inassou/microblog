@extends('layouts.blog')

@section('content')

    <p style="padding-top: 50px; padding-left: 200px;padding-bottom:20px;font-size:30px">Votre profile</p>

    @foreach($posts as $post)

        @if(!Auth::guest() && ($post->name == Auth::user()->id))

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>  {{ $post->title }} </h2>
                        <p>  {{ $post->created_at }} </p>
                        <p>Posté par {{ $post->name }}</p>
                        <p class="text-right"><h12> Thème: {{ $post->theme }}</h12></p>

                        </div>

                        <div class="panel-body">
                            <div>
                                {!! $post->content !!}
                            </div>
                            <p></p>
                        <form method="post" action="/comment/add">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="on_post" value="{{ $post->id }}">
                            <input type="hidden" name="slug" value="{{ $post->slug }}">
                            <div class="form-group">
                                <textarea required="required" placeholder="Entrer votre commentaire" name = "body" class="form-control"></textarea>
                            </div>
                            <input type="submit" name='post_comment' class="btn btn-default" value = "Commenter"/>
                        </form>
                        <p></p>
                        <ul style="list-style: none; padding: 0">
                            <a class="btn btn-default" href={{route('news.edit', $post)}}>Editer</a>

                        </ul>

                    </div>

                </div>
            </div>
        </div>



@endif



    @endforeach







@endsection





