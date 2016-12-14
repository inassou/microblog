    @extends ('layouts.app')

    @section ('content')

        <h1>Editer</h1>

        {!! BootForm::openHorizontal (['url' => 'user', 'sm' => [2, 5], 'lg' => [2, 5], 'method'=> 'put']) !!}

        {!! BootForm::text('Titre', $post->title) !!}

        {!! BootForm::text('Slug', $post->slug) !!}

        {!! BootForm::textarea('Contenu', $post->content) !!}

        {!! BootForm::close() !!}

        <p> <a class="btn btn-primary" href="{{route('news.update', $post) }}">Editer</a></p>


    @stop


