@extends('layouts.main')

@section('title-tab', 'Index')

@section('main-content')
    <div class="container-fluid">
        <h1 class="text-center mb-5">Comics</h1>
        <div class="row p-3">
            @foreach ($comics as $comic)
            <div class="col-2">
                <div class="card mb-5">
                    <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
                    <div class="card-body">
                        <a href="{{ route('comics.show', $comic->id) }}">
                            <h4 class="card-title">{{$comic->title}}</h4>
                        </a>
                        <p class="card-text">{{$comic->description}}</p>
                        <h5 class="card-text">{{$comic->price}} $</h5>
                        <h5 class="card-text">{{$comic->sale_date}}</h5>
                        <h5 class="card-text">{{ ucfirst($comic->type) }}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
