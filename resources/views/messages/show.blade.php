@extends('layouts.app')

@section('content')
    <h1 class="h3">Mensaje id: {{$message->id}}</h1>
    <img class="img-thumbnail" src="{{$message->image}}" alt="">
    <p class="card-text">{{$message->content}}</p>
@endsection