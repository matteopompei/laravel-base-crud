@extends('layouts.base')

@section('content')
  <h1>Crea prodotto</h1>

  <form action="{{ route('comics.store') }}" method="POST">

    @csrf

    <div class="form-group">
      <label for="title">Titolo</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
        value="{{ old('title') }}" placeholder="Inserisci il nome dell'opera">
      @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="thumb">Copertina</label>
      <input type="url" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb"
        value="{{ old('thumb') }}" placeholder="Inserisci il link dell'immagine di copertina">
      @error('thumb')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="description">Descrizione</label>
      <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
        placeholder="Inserisci la descrizione dell'opera">{{ old('description') }}</textarea>
      @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="price">Prezzo</label>
      <input type="number" min="0.00" max="10000.00" step="0.01" class="form-control @error('price') is-invalid @enderror"
        id="price" name="price" value="{{ old('price') }}" placeholder="Inserisci il prezzo dell'opera">
      @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="series">Serie</label>
      <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series"
        value="{{ old('series') }}" placeholder="Inserisci la serie di appartenza">
      @error('series')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="sale_date">Data</label>
      <input type="date" class="form-control @error('date') is-invalid @enderror" id="sale_date" name="sale_date"
        value="{{ old('date') }}">
      @error('date')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="type">Tipologia</label>
      <select class="form-control form-control-md" id="type" name="type">
        <option value="" disabled selected hidden>Scegli la tipologia dell'opera</option>
        <option value="comic book" {{ old('type') == 'comic book' ? 'selected' : null }}>Comic book</option>
        <option value="graphic novel" {{ old('type') == 'graphic novel' ? 'selected' : null }}>Graphic novel</option>
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Crea</button>
  </form>
@endsection
