@extends('layouts/app')

@section('title','A-propos | '.config('app.name'))

@section('contenu')
    <h1 class="text-black-500 font-semibold text-5xl mt-5">A propos</h1>
    <img src="{{ asset('images/img2.jpg') }}" class="rounded-full shadow-md w-48 h-32 my-8" alt="Romy2" width="10%" height="10%">

    <h2 class="text-gray-500 mt-5 mb-2">Contruit avec <span class="text-pink-500">&hearts;</span> par ROMUALD MENGUE</h2>

    <p><a href="{{route('home')}}"  class="text-indigo-500 hover:text-indigo-700 underline">revenir à la page d'accueil</a></p>

@endsection()