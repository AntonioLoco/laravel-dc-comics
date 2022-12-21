<?php
$links = [
    [
        'name' => 'HOME',
        'href' => 'home',
    ],
    [
        'name' => 'COMICS',
        'href' => 'comics.index',
    ],
    [
        'name' => 'MOVIES',
        'href' => '',
    ],
    [
        'name' => 'TV',
        'href' => '',
    ],
    [
        'name' => 'GAMES',
        'href' => '',
    ],
    [
        'name' => 'COLLECTIBLES',
        'href' => '',
    ],
    [
        'name' => 'VIDEOS',
        'href' => '',
    ],
    [
        'name' => 'FANS',
        'href' => '',
    ],
    [
        'name' => 'NEWS',
        'href' => '',
    ],
    [
        'name' => 'SHOP',
        'href' => '',
    ],
];

?>

<header>
    <div class="header-top">
        <div class="container">
            <p class="mx-2">DC POWER VISA</p>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container pt-3 d-flex justify-content-between align-items-center">
            <div class="logo">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Dc Logo">
            </div>
            <nav>
                <ul class="d-flex justify-content-end">
                    @foreach ($links as $link)
                        <li><a class="{{ Route::currentRouteName() === $link['href'] ? 'active' : '' }}"
                                href="{{ $link['href'] != '' ? route($link['href']) : '' }}">{{ $link['name'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
</header>
