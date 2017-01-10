@extends('layouts.app')

    @section('content')
            <p style="padding-top: 50px; padding-left: 200px;padding-bottom:20px;font-size:30px">Éditez votre article</p>


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