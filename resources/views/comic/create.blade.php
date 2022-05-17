@extends('layouts.main')

@section('title-tab', 'Create')

@section('main-content')
    <div class="container-fluid p-5 text-start">
        <form class="m-auto" action="{{ route('comics.store') }}" method="post" style="width: 30%">
            @csrf

            <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" name="title" id="title">
            </div>

            <div class="mb-3">
                <label for="description">Description</label>
                <input type="text" name="description" id="description">
            </div>

            <div class="mb-3">
                <label for="thumb">Thumb</label>
                <input type="text" name="thumb" id="thumb">
            </div>

            <div class="mb-3">
                <label for="price">Price</label>
                <input type="number" name="price" id="price">
            </div>

            <div class="mb-3">
                <label for="series">Series</label>
                <input type="text" name="series" id="series">
            </div>

            <div class="mb-3">
                <label for="sale_date">Sale Date</label>
                <input type="date" name="sale_date" id="sale_date">
            </div>

            <div class="mb-3">
                <label for="type">Type</label>
                <input type="text" name="type" id="type">
            </div>

            <input type="submit" value="Submit">
        </form>
    </div>
@endsection
