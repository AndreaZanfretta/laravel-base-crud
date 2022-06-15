@extends('layouts.base')

@section('pageTitle', 'Comics - Home')
    
@section('mainContent')
<div class="container">
    <div class="text-center">
        <h1>Benvenuti da Comic Shop</h1>
        <p>su questo sito puoi trovare tutti i fumetti che cerchi ad un prezzo vantaggiosissimo!</p>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col text-center">
            <button type="button" class="btn btn-primary btn-lg"> <a class="text-decoration-none text-reset" href="{{route('comics.index')}}">Sfoglia Comics</a></button>
        </div>
</div>

@endsection