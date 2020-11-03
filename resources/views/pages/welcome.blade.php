@extends('app')

@section('contenu')
        <h1 class="text-black-400 font-semibold text-3xl sm:text-5xl mt-12 mb-10">Bienvenue à Douala</h1>

        <img src="{{ asset('images/img1.jpg') }}" class="rounded-full shadow-md h-25 w-48 sm:h-32" alt="Romy1" width="10%" height="10%">
        <h2 class="text-indigo-500 text-3xl font-semibold mt-5">Hello from Douala</h2>
        <p class="text-gray-700 text-lg">Il est actuellement {{ date("H:i",time()) }}</p>
@endsection()
