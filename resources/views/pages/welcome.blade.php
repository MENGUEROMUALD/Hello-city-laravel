@extends('app')

@section('contenu')
        <h1>Bienvenue à Douala</h1>

        <img src="{{ asset('images/img1.jpg') }}" class="" alt="Romy1" width="10%" height="10%">
        <p>Il est actuellement {{ date("H:i",time()) }}</p>
@endsection()
