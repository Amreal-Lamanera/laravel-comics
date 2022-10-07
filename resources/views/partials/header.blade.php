<header class="container">
    <div class="logo">
        <img src="{{ asset('./assets/dc-logo.png')}}" alt="DC Logo">
    </div>

    @php
        $headerWidg = [
            [
                'title' => 'home',
                'active' => true,
                'a' => '',
            ],
            [
                'title' => 'comics',
                'active' => false,
                'a' => 'comics',
            ],
            [
                'title' => 'movies',
                'active' => false,
                'a' => '',
            ],
            [
                'title' => 'tv',
                'active' => false,
                'a' => '',
            ],
            [
                'title' => 'games',
                'active' => false,
                'a' => '',
            ],
            [
                'title' => 'collectibles',
                'active' => false,
                'a' => '',
            ],
            [
                'title' => 'videos',
                'active' => false,
                'a' => '',
            ],
            [
                'title' => 'fans',
                'active' => false,
                'a' => '',
            ],
            [
                'title' => 'news',
                'active' => false,
                'a' => '',
            ],
            [
                'title' => 'shop',
                'active' => false,
                'a' => '',
            ]
        ];
    @endphp

    <nav class="main-nav">

        <ul class="nav__list">

            @foreach($headerWidg as $item)
            <li class="nav__list__item {{ $item['active'] ? 'active' : '' }}">
                <a href="./{{ $item['a'] }}">
                    {{ $item['title'] }}
                </a>
            </li>
            @endforeach
        </ul>

    </nav>
  </header>