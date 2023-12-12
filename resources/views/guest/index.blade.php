@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">{{$title}} :</h1>
    <div class="row">
        @foreach ($movies as $movie)
            <div class="col-3">
                <ul class="card">
                    <li>
                        <span class="fw-bold">Title : </span>{{$movie->title}}
                    </li>
                    <li>
                        <span class="fw-bold">Original title : </span>{{$movie->original_title}}
                    </li>
                    <li>
                        <span class="fw-bold">Nationality : </span>{{$movie->nationality}}
                    </li>
                    <li>
                        <span class="fw-bold">Date : </span>{{$movie->date}}
                    </li>
                    <li>
                        <span class="fw-bold">Vote : </span>{{$movie->vote}}
                    </li>
                </ul>               
            </div>
        @endforeach
    </div>
</div>
@endsection