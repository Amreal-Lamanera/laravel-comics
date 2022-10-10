@extends('layout.app')

@section('metaTitle', 'DC - Comics: ' . $comic['series'])

@section('content')

{{-- <div class="container">
    <div class="current">
        <h2>current series</h2>
    </div>
    <div class="card-container">
        @forelse ($comics as $comic)
        <div class="card">
            <a href="#nogo">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                <h4>{{ $comic['series'] }}</h4>
            </a>
        </div>
        @empty
            <p>COMICS NOT FOUND</p>
        @endforelse
    </div>
    <div class="load">
        load more
    </div>
</div> --}}
CIAO!

@endsection