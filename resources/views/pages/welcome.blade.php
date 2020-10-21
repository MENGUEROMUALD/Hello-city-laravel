@extends('app')

@section('contenu')
        <h1>Bienvenue à Douala</h1>
        <p>Il est actuellement {{ date("H:i",time()) }}</p>
@endsection()

@section('link')
    <a href="/a-propos">A propros</a>
@endsection()
