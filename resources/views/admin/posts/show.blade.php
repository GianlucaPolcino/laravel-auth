@extends('layouts.app')

@section('content')
    <h1 class="py-5 text-center">
        {{$post->title}}
    </h1>

    <p class="text-center">
        {{$post->content}}
    </p>

    <div class="container pt-5">
        <a href="#" class="btn btn-warning mr-3">Modifica</a>
        <a href="#" class="btn btn-danger">Cancella</a>
    </div>
@endsection

@section('title')
    {{$post->title}}
@endsection