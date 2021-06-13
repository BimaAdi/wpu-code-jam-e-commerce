<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assembly | Rakit Laptop</title>
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/hero.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/produk.css">
</head>
<body>
    <x-Navbar selected="Rakit Laptop"/>
    <x-Hero description="Buat Laptop Impianmu"/>
    <h1>Rakit Laptop</h1>
    <div id="Rakit"></div>
    <x-Footer />
    <script src="/js/components/RakitItemPages.js"></script>
</body>
</html>
