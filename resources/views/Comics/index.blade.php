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
                <h5 id="del" class="card-title">{{$comic->title}}</h5>
                <p class="card-text">{{$comic->series}}</p>
                <p class="card-text">{{$comic->type}}</p>
                <a class="btn btn-info" href="{{route('comics.show', $comic->id)}}">Scopri di più</a>
                <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-warning">Modifica</a>
                <form action="{{route('comics.destroy', $comic->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" id="delete" class="btn btn-danger">Cancella</button>
                    <p id="demo"></p>
                  </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
@endsection