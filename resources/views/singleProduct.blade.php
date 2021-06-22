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
            <div class="col-8">
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
        </div>
    </section>
       
    <section class="talent">
        <div class="container flex">

            <div class="col-6">
                <div>
                    <h3>Talent</h3>
                </div>
                <div class="flex">
                    <div class="col-4">
                        <span>Art by:</span>
                    </div>
                    <div class="col-8">
                        {{-- bisogna inserire un implode --}}
                        @foreach($comic['artists'] as $artist)
                            {{ $artist }}
                        @endforeach
                    </div>
                </div>
                <div class="flex">
                    <div class="col-4">
                        <span>Written by:</span>
                    </div>
                    <div class="col-8">
                        {{-- bisogna inserire un implode --}}
                        @foreach($comic['writers'] as $writer)
                            {{ $writer }}
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-6">
                <h3>Specs</h3>
                <div class="flex">
                    <div class="col-4">
                        <span>Series:</span>
                    </div>
                    <div class="col-8">
                        {{ strtoupper($comic['series']) }}
                    </div>
                </div>
                 <div class="flex">
                    <div class="col-4">
                        <span>U.S. Price</span>
                    </div>
                    <div class="col-8">
                        {{ $comic['price'] }}
                    </div>
                </div>
                 <div class="flex">
                    <div class="col-4">
                        <span>On Sale Date</span>
                    </div>
                    <div class="col-8">
                        {{-- formattare data M-d-Y --}}
                        {{ $comic['sale_date'] }}
                    </div>
                </div>
             
            </div>
        </div>
    </section>

@endsection





