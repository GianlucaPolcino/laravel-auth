@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>
                Tutti i Post
            </h1>

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Azioni</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection