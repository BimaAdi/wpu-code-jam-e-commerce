<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Assembly</title>
        <link rel="stylesheet" href="/css/global.css">
        <link rel="stylesheet" href="/css/navbar.css">
        <link rel="stylesheet" href="/css/detail_produk.css">
        <link rel="stylesheet" href="/css/footer.css">
    </head>
    <body>
        <x-Navbar selected=""/>
        <div class="container">
            <div class="detail_produk__grid">
                <div class="detail_produk__img"></div>
                <div class="detail_produk__detail">
                    <h1>{{ $produk->brand }} {{ $produk->name }}</h1>
                    <h2>Rp {{ $produk->price }}</h2>

                    <p>spesifikasi</p>

                    <ul>
                        <li>Operating System: Windows 10</li>
                        <li>Memory: {{ $produk['ram size'] }} GB</li>
                        <li>Processor: {{ $produk->processor}}</li>
                    </ul>

                    <button class="detail_produk__button">Beli</button>
                </div>
            </div>
        </div>
        <x-Footer />
    </body>
</html>