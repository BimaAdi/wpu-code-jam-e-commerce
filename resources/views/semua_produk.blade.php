<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assembly | Semua Produk</title>
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/semua_produk.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/hero.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/produk.css">
    <link rel="stylesheet" href="/css/search.css">
</head>
<body>
    <x-Navbar selected="Semua Produk"/>
    <main>
        <div id="Produk" data-initial="{{ $produks_json }}"></div>
    </main>
    <x-Footer />
    <script src="/js/semua_produk/Bootstrap.js"></script>
</body>
</html>
