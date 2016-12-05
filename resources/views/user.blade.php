<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body style="padding-top: 50px;">

<nav class="navbar navbar-inverse navbar-fixed-top">

    <nav class="slide">

    </nav>


    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://localhost:8000">MissRobot</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">


                <li><a href="/home">Home</a></li>
                <li><a href="/authentification">Se connecter</a></li>
                <li class="active"><a href="/sign_up">S'inscrire</a></li>


            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>



    <h1>Inscription</h1>


    {!! BootForm::openHorizontal(['url' => 'user', 'sm' => [2, 5], 'lg' => [2, 10]])!!}

    {!! BootForm::text('Pseudo', 'name') !!}
    {!! BootForm::email('Email', 'email') !!}
    {!! BootForm::password('Mot de passe', 'password')->helpBlock('La longueur du mot de passe doit être supérieur à 8')!!}
    {!! BootForm::text('Retapez votre mot de passe', 'password') !!}
    {!! BootForm::submit('Envoyer') !!}

    {!! BootForm::close() !!}





