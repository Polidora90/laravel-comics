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
        </div>
    </section>
       
    <div class="container">
    </div>

@endsection





