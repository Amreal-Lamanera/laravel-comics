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
        <h1>
            {{ $comic['series'] }}
        </h1>
        <div class="buy">
            <span>
                <strong>U.S. Price: {{ $comic['price'] }}</strong>
            </span>
            <strong>AVAIABLE</strong>
        </div>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex id repudiandae, facere nemo veniam consectetur officia. Adipisci ipsa, sint, similique unde hic omnis quisquam eius natus facere atque quo eveniet.
            Praesentium optio saepe laudantium repudiandae beatae nesciunt, soluta numquam eum id cumque, aut ullam placeat quia! Doloremque ratione nesciunt eaque numquam debitis a laborum, nihil pariatur ipsum corporis perferendis eius.
            Enim ut quod beatae quo harum odio dignissimos, quaerat quidem nulla inventore incidunt nesciunt pariatur. Officiis illum quod quidem reprehenderit. Earum facere, at repellendus omnis minima qui doloremque deleniti nam.
        </p>
    </div>
    <div class="comic-specs">
        <div class="container">
            <h3>Specs</h3>
            
            <ul>
                <li>
                    <span>Series: </span>
                </li>
                <li>
                    <span>{{ $comic['series'] }}</span>
                </li>
                <li>
                    <span>U.S. Price: </span>
                </li>
                <li>
                    <span>{{ $comic['price'] }}</span>
                </li>
            </ul>
        </div>
    </div>
    
</div>

@endsection