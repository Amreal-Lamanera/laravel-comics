@extends('layout.app')

@section('metaTitle', 'DC - Comics')

@section('content')

<div class="index container">
    <div class="current">
        <h2>current series</h2>
    </div>
    <div class="card-container">
        @forelse ($comics as $comic)
        <div class="card">
            <a href="{{ route('comics.show', $loop->index) }}">
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
</div>

@endsection