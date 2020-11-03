<footer class="mb-5">
    <p class="text-gray-400">&copy; Copyright {{date('Y',time())}}
    @if(!Route::is('apropos')) 
        &middot;<a href="{{ route('apropos')}}" class="text-indigo-500 hover:text-indigo-700 underline">A propros</a>
    </p>
    @endif
</footer>