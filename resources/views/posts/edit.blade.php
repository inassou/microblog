
    @extends('layouts.app')

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
        {!! BootForm::text('Titre','title') !!}
        {!! BootForm::text('Slug', 'slug') !!}
        {!! BootForm::textarea('Contenu', 'content') !!}
        {!! BootForm::submit('Editer') !!}
        {!! BootForm::close() !!}

    @stop