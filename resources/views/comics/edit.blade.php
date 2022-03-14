@extends('layouts.base')

@section('content')
  <h1>Modifica prodotto</h1>

  <form action="{{ route('comics.update', $comic->id) }}" method="POST">

    @csrf
    @method('PUT')

    <div class="form-group">
      <label for="title">Titolo</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
        value="{{ old('title') ?? $comic->title }}" placeholder="Inserisci il nome dell'opera">
      @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="thumb">Copertina</label>
      <input type="url" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}"
        placeholder="Inserisci il link dell'immagine di copertina">
      @error('thumb')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="description">Descrizione</label>
      <textarea class="form-control" id="description" name="description"
        placeholder="Inserisci la descrizione dell'opera">{{ $comic->description }}"</textarea>
      @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="price">Prezzo</label>
      <input type="number" min="0.00" max="10000.00" step="0.01" class="form-control" id="price" name="price"
        value="{{ $comic->price }}" placeholder="Inserisci il prezzo dell'opera">
      @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="series">Serie</label>
      <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}"
        placeholder="Inserisci la serie di appartenza">
      @error('series')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="sale_date">Data</label>
      <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
      @error('date')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="type">Tipologia</label>
      <select class="form-control form-control-md" id="type" name="type">
        <option value="" disabled selected hidden>Scegli la tipologia dell'opera</option>
        <option value="Comic book" {{ (old('type') ?? $comic->type) == 'Comic book' ? 'selected' : '' }}>Comic book
        </option>
        <option value="Graphic novel" {{ (old('type') ?? $comic->type) == 'Graphic novel' ? 'selected' : '' }}>Graphic
          novel</option>
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Conferma modifiche</button>
  </form>
@endsection
