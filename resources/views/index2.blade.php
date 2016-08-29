@extends('layout')
@section('css')
    <link rel="stylesheet" href="{{ asset('/css/style.etapes.css') }}" id="theme-stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/etapes.css') }}" id="theme-stylesheet">
@endsection
@section('content')
        <div class="fake-h1">
            <h1>Ressources humaines</h1>
            <img src="img/rature.png" />
        </div>
        <h1 class="cursive">Recrutement humain</h1>
        <h2 class="sub">Le recrutement sans CV. </h2>
        <p class="hashtags">#savoirFaire #savoirEtre</p>
        <div class="why">
            <div class="row">
                <div class="employeur col-sm-10 col-sm-offset-1" data-toggle="collapse" data-target="#pop_up_employer">
                    <div class="card card1">
                        <h4>info</h4>
                        <ul>
                            <li>À chaque question j'indique ma préférence de matching ou de mots-clés attendus</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
@endsection