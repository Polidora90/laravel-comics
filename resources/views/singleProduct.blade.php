@extends('layout.default')

@section('page_title', 'Dettagli Comic')

@section('content')
    <section class="blue-banner">
        <div class="container">
            <div class="single-img-container">
                <div class="type">
                    <span>{{ strtoupper($comic['type']) }}</span>
                </div>
                <img src="{{ $comic['thumb'] }}" alt="">
                <div class="gallery">
                    <span>VIEW GALLERY</span>
                </div>
            </div>
        </div>
    </section>

    <section class="main-info">
        <div class="container">
            <h2>{{ strtoupper($comic['title']) }}</h2>

            <div class="price-container flex">
                <div class="price flex">
                    <h4>U.S. Price: {{ $comic['price'] }}</h4>
                    <h4>AVAILABLE</h4>
                </div>
                <div class="availability">
                    <h4>Chech Availability <i class="fas fa-sort-down"></i></h4>
                </div>
            </div>

            <div>
                <p>{{ $comic['description'] }}</p>
            </div>
           
        </div>
    </section>
       
    <div class="container">
    </div>

@endsection





