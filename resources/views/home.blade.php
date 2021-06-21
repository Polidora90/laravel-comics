@extends('layout.default')

@section('page_title', 'Laravel Comix')

@section('content')

<section class="main-section">
    <div class="container">
        <div class="card-container flex">
             @foreach($productsList as $product)
            <div class="card">
                <div class="img-container">
                    <img src="{{ $product['thumb'] }}" alt="">
                </div>
                <h4>{{ $product['title'] }}</h4>
            </div>
            @endforeach
        </div>
    </div>
</section>


@endsection