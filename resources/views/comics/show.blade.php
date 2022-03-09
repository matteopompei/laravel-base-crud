@extends('layouts.base')

@section('content')
  <h1>{{ $comic->title }}</h1>
  <img src="{{ $comic->thumb }}" alt="" style="float: left; margin-right: 20px;">
  <p>{{ $comic->description }}</p>
  <a href="{{ route('comics.index') }}"><button type="button" class="btn btn-primary">Indietro</button></a>
@endsection
