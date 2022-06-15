@extends('layouts.base')

@section('pageTitle', 'Comics - Comics')
    
@section('mainContent')
<div class="container">
    <h1 class="text-center my-5">Scopri i nostri Comics</h1>
    <div class="row">
        @foreach ($comics as $comic)
        <div class="col col-6 col-md-4 col-lg-3">
            <div class="card" style="width: 18rem;">
                <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
                <div class="card-body">
                <h5 class="card-title">{{$comic->title}}</h5>
                <p class="card-text">{{$comic->series}}</p>
                <a href="{{route('comics.show', $comic->id)}}">Scopri di più</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection