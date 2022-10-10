@extends('layout.app')

@section('metaTitle', 'DC - Comics: ' . $comic['series'])

@section('content')

<div class="show-details">

    <div class="poster-container">
        
        <div class="container">
            <div class="img-container">
                <img src="{{ $comic['thumb'] }}" alt="">
                <span class="type">
                    {{ $comic['type'] }}
                </span>
                
                <span class="type gallery">
                    view gallery
                </span>
            </div>
        </div>
        
    </div>
    
    <div class="container comic-desc">
        <div class="content">
            <h1>
                {{ $comic['title'] }}
            </h1>
            <div class="buy">
                <div class="price">
                    <span>
                        <strong>U.S. Price: {{ $comic['price'] }}</strong>
                    </span>
                    <strong>AVAILABLE</strong>
                </div>
                <div class="check">
                    <select name="" id="">
                        <option value="" default>
                            Check Availability
                        </option>
                    </select>
                </div>
            </div>
            <p>
                {{ $comic['description'] }}
            </p>
        </div>

        <div class="adv">
            <h3>
                advertisement
            </h3>
            <a href="https://www.youtube.com/channel/UC_J9gDsDgkpLWh7E8acVtqw">
                <img src="{{ asset('./assets/adv.jpg') }}" alt="">
            </a>
        </div>
    </div>

    <div class="comic-details">
        <div class="container">

            <div class="grid-container">

                <div class="comic-talent">
                    <h3>Talent</h3>
                    <ul>
                        <li>
                            <span>Art by: </span>
                        </li>
                        <li>
                            @foreach ($comic['artists'] as $artist)
                            <a class="c-blue">
                                {{ $artist }}
                            </a>
                            @php
                            if(!$loop->last)
                                echo ', '
                            @endphp
                            @endforeach
                        </li>
                        <li>
                            <span>Written by: </span>
                        </li>
                        <li>
                            @foreach ($comic['writers'] as $artist)
                            <a class="c-blue">
                                {{ $artist }}
                            </a>
                            @php
                            if(!$loop->last)
                                echo ', '
                            @endphp
                            @endforeach
                        </li>
                    </ul>
                </div>
                
                <div class="comic-specs">
                    <h3>Specs</h3>
                    <ul>
                        <li>
                            <span>Series: </span>
                        </li>
                        <li>
                            <a class="c-blue txt-up">
                                {{ $comic['series'] }}
                            </a>
                        </li>
                        <li>
                            <span>U.S. Price: </span>
                        </li>
                        <li>
                            <span>{{ $comic['price'] }}</span>
                        </li>
                        <li>
                            <span>On Sale Date: </span>
                        </li>
                        <li>
                            <span>{{ $comic['sale_date'] }}</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    
</div>

@endsection