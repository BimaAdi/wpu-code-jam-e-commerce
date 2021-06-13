<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assembly</title>
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/section.css">
    <link rel="stylesheet" href="/css/hero.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/produk.css">
</head>
<body>
    <x-Navbar selected="Beranda"/>
    <x-Hero description="Temukan laptop impianmu"/>
    <x-Section />
    <div id="Produk"></div>
    <x-Footer />
    <script src="/js/Home/Bootstrap.js"></script>
</body>
</html>
