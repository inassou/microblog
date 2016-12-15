
@extends('layouts.blog')

@section('content')

    <h1>New post</h1>

    <?php $formOptions = [
        'url' => 'user',
        'sm' => [2, 5],
        'lg' => [2, 5],
    ]; ?>

    {!! BootForm::openHorizontal($formOptions)->action(route('news.update')) !!}
    <input type="hidden" name="_method" value="GET">
    {!! BootForm::text('Titre', null) !!}
    {!! BootForm::text('Slug', null) !!}
    {!! BootForm::textarea('Contenu', null) !!}
    {!! BootForm::submit('Ajouter') !!}
    {!! BootForm::close() !!}

@stop