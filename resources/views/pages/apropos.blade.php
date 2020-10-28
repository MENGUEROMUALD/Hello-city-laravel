@extends('app')

@section('title','A-propos | '.config('app.name'))

@section('contenu')
    <p>Contruit avec &hearts; par ROMUALD MENGUE</p>

    <p><a href="{{route('home')}}">revenir à la page d'accueil</a></p>

@endsection()