<?php

if(!function_exists('titre_page')){
    
    function titre_page(?string $titre = null) : string
    {
       return $titre ? $titre.' | '.config('app.name') : config('app.name');
    }
}