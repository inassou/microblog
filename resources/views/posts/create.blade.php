    @extends ('layouts.app')

    @section ('content')

        <h1>Creer un post</h1>

        {!! BootForm::openHorizontal (['method'=> 'put', 'url' => route('news.store'), 'sm' => [2, 5], 'lg' => [2, 5]]) !!}

        {!! BootForm::text('Titre', $post->title) !!}

        {!! BootForm::textarea('Contenu', $post->content) !!}

        {!! BootForm::submit('Creer') !!}

        {!! BootForm::close() !!}

    @stop


