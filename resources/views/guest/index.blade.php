@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($movies as $movie)
            <div class="col-3 card">
                <ul>
                    <li>{{$movie->title}}</li>
                    <li>{{$movie->original_title}}</li>
                    <li>{{$movie->nationality}}</li>
                    <li>{{$movie->date}}</li>
                    <li>{{$movie->vote}}</li>
                </ul>               
            </div>
        @endforeach
    </div>
</div>
@endsection