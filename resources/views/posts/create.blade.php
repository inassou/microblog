@extends('layouts.app')

@section('content')

    @if (Auth::guest())
        <p style="padding-top: 50px; padding-left: 100px;font-size:26px"><a href="{{ url('/login') }}">Connectez-vous pour créer un nouvel article</a></p>

    @else
        <p style="padding-top: 50px; padding-left: 200px;padding-bottom:20px;font-size:30px">Créez votre article</p>

    <?php $formOptions = [
        'url' => 'user',
        'sm' => [2, 5],
        'lg' => [2, 5],

    ]; ?>

    {!! BootForm::openHorizontal($formOptions)->action(route('news.store')) !!}
    <input type="hidden" name="_method" value="POST">
    {!! BootForm::text('Titre', 'title') !!}
    {!! BootForm::text('Theme', 'theme')!!}
    {!! BootForm::textarea('Contenu', 'content') !!}
    {!! BootForm::submit('Nouvel article') !!}
    {!! BootForm::close() !!}

    @endif

@stop