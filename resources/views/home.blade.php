@extends('layout.default')

@section('page_title', 'Laravel Comix')

@section('content')

{{-- @dump(Request::route()) --}}

<section class="main-section">
    <div class="container">
        <div class="card-container flex">
             @foreach($comicsList as $comic)
            <div class="card">
                <div class="img-container">
                    <img src="{{ $comic['thumb'] }}" alt="">
                </div>
                <h4><a href="{{ route('singolo-comic') }}">{{ $comic['title'] }}</a></h4>
            </div>
            @endforeach
        </div>
    </div>
</section>


@endsection