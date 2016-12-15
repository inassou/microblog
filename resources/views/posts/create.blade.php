@extends('layouts.app')

@section('content')

    <h1>Editer</h1>

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

@stop