@extends('layouts.app')
@section('main')
  <h1>{{ $article->title }}</h1>
  <p> {{ $article->content }}</p>
@endsection
