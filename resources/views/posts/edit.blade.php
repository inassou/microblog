
    @extends('layouts.app')

    @section('content')

        <h1>Edit</h1>

        <?php $formOptions = [
            'url' => 'user',
            'sm' => [2, 5],
            'lg' => [2, 5],
            'method'=> 'put'
        ]; ?>

        {!! BootForm::openHorizontal($formOptions)->action(route('news.update', $post)) !!}
        <input type="hidden" name="_method" value="PUT">
        {!! BootForm::text('Titre', $post->title) !!}
        {!! BootForm::text('Slug', $post->slug) !!}
        {!! BootForm::textarea('Contenu', $post->content) !!}
        {!! BootForm::submit('Editer') !!}
        {!! BootForm::close() !!}

    @stop