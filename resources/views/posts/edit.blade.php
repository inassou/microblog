@extends('layouts.blog')

    @section('content')

        <h1>Editer</h1>

        <?php $formOptions = [
            'url' => 'user',
            'sm' => [2, 5],
            'lg' => [2, 5],
            'method'=> 'put'
        ]; ?>

        {!! BootForm::openHorizontal($formOptions)->action(route('news.update', $post)) !!}
        <input type="hidden" name="_method" value="PUT">
        {!! BootForm::text('Titre', 'title')->defaultValue($post->title) !!}
        {!! BootForm::text('Theme', 'theme')->defaultValue($post->theme) !!}
        {!! BootForm::textarea('Contenu', 'content')->defaultValue($post->content) !!}
        {!! BootForm::submit('Editer') !!}
        {!! BootForm::close() !!}

    @stop