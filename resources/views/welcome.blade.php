<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Memoire</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/myStyle.css')}}">
        <script type="text/javascript" src="{{ asset('lib/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('lib/jquery.min.js')}}"></script>

        <!-- Styles -->


       
    </head>
    <body>

         <ul class="nav nav-tabs bar" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="/" role="tab" aria-controls="home" aria-selected="true">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="author-tab" data-toggle="tab" href="/author" role="tab" aria-controls="author" aria-selected="false">Auteur</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="memoire-tab" data-toggle="tab" href="/memoire" role="tab" aria-controls="memoire" aria-selected="false">Memoire</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="enseignant-tab" data-toggle="tab" href="/enseignant" role="tab" aria-controls="enseignant" aria-selected="false">Enseignant</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="departement-tab" data-toggle="tab" href="/departement" role="tab" aria-controls="departement" aria-selected="false">Departement</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="diplome-tab" data-toggle="tab" href="/diplome" role="tab" aria-controls="diplome" aria-selected="false">Diplome</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="parcour-tab" data-toggle="tab" href="/parcour" role="tab" aria-controls="parcour" aria-selected="false">Parcour</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="specialisation-tab" data-toggle="tab" href="/specialisation" role="tab" aria-controls="specialisation" aria-selected="false">Specialisation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="about-tab" data-toggle="tab" href="/about" role="tab" aria-controls="about" aria-selected="false">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="/contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
          </li>
        </ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
  <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">...</div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
</div>


        <!-- <div class="container">
            <div class="navbar navbar-default">
                <div class="contenair-fluid">
                    <ul class="nav navbar-nav">
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div> -->
        <div class="container">
            @yield('content')
        </div>

       
    </body>
</html>
