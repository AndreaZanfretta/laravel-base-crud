@extends('layouts.base')

@section('pageTitle', 'Comics - Nuovo Comic')
    
@section('mainContent')
    <div class="container">
      <h1>Inserisci Comic</h1>
      <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Titolo</label>
          <input type="text" class="form-control" id="title" aria-describedby="title" name="title" placeholder="inserisci titolo comic">
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Descrizione</label>
          <textarea name="description" class="form-control" id="description" cols="30" rows="5" placeholder="inserisci descrizione"></textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">URL Immagine</label>
            <input type="text" class="form-control" id="thumb" aria-describedby="thumb" name="thumb"placeholder="inserisci ulr immagine">
          </div>
        <div class="mb-3">
          <label for="price" class="form-label">Prezzo</label>
          <input type="text"  class="form-control" id="price" aria-describedby="price" name="price" placeholder="inserisci prezzo">
        </div>
        <div class="mb-3">
          <label for="series" class="form-label">Genere:</label>
          <input type="text"  class="form-control" id="series" aria-describedby="series" name="series" placeholder="inserisci genere">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di Uscita:</label>
            <input type="text" class="form-control" id="sale_date" aria-describedby="sale_date" name="sale_date" placeholder="inserisci data di uscita (yy-mm-dd)">
        </div>
        <div class="mb-3">
          <label for="type" class="form-label">Tipo:</label>
          <select class="form-control"  name="type" id="type">
            <option value="comic book">Comic Book</option>
            <option value="graphic novel">Graphic Novel</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Invia</button>
      </form>
    </div>
@endsection