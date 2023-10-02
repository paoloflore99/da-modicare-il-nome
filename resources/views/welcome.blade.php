@extends('layouts.public')

@section('content')
    <h1 class="d-flex justify-content-center text-success">Lista dei Film</h1>
    
    <ul>
        @foreach($film as $movie)
            <li class="text-black">{{ $movie->id}}</li>
            <li class="text-black">{{ $movie->title}}</li>
            <li class="text-black">{{ $movie->original_title}}</li>
            <li class="text-black">{{ $movie->nationality}}</li>
            <li class="text-black">{{ $movie->date}}</li>
            <li class="text-black">{{ $movie->vote}}</li>
        @endforeach
    </ul>
@endsection

