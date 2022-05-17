@extends('layouts.main')

@section('title-tab', 'Show')

@section('main-content')
    <div class="container-fluid">
        <div class="row p-4 text-center">
            <div class="col-12 m-3">
                <h5 class="card-title">
                    {{ $comic->title }}
                </h5>
            </div>
            <div class="col-12 m-3">
                <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}" style="width: 20%">
            </div>
            <div class="col-12 m-3">
                <p class="card-text text-start p-5">
                    {{ $comic->description}}
                </p>
            </div>
            <div class="col-12 m-3">
                <p class="card-text text-center">
                    {{ $comic->price}} $
                </p>
                <p class="card-text text-center">
                    {{ $comic->sale_date}}
                </p>
                <p class="card-text text-center">
                    {{ ucfirst($comic->type) }}
                </p>
            </div>
            <div class="col-6">
                <a href="{{route("comics.show", $comic->id - 1)}}">
                    <button class="btn btn-success">Previous</button>
                </a>
            </div>
            <div class="col-6">
                <a href="{{route("comics.show", $comic->id + 1)}}">
                    <button class="btn btn-success">Next</button>
                </a>
            </div>
        </div>
    </div>
@endsection
