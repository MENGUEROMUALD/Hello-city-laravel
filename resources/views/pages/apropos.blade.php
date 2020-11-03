@extends('app')

@section('title','A-propos | '.config('app.name'))

@section('contenu')

    <img src="{{ asset('images/img2.jpg') }}" alt="Romy2" width="10%" height="10%">

    <p>Contruit avec &hearts; par ROMUALD MENGUE</p>

    <p><a href="{{route('home')}}">revenir à la page d'accueil</a></p>

@endsection()