@extends('layouts.base')

@section('pageTitle', 'Comics - Comics')
    
@section('mainContent')
    <div class="container">
        <h1 class="text-center">{{$comic['title']}}</h1>
        <div class="row">
            <div class="col flex-grow-0">
                <div class="text-center">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                </div>
            </div>
            <div class="col flex-grow-1">
                <div class="text-left">
                    <p>{{$comic['description']}}</p>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <p>Genere: {{$comic['series']}}</p>
                    </div>
                    <div class="col text-center">
                        <p>Data di uscita: {{$comic['sale_date']}}</p>
                    </div>
                    <div class="col text-center">
                        <p>Prezzo: {{$comic['price']}} €</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col text-center">
                        <button type="button" class="btn btn-primary btn-lg">Compra Ora!</button>
                    </div>
                </div>
            </div>
        </div>
        
    
    </div>
@endsection