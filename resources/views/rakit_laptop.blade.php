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
    <link rel="stylesheet" href="/css/rakit.css">
</head>
<body>
    <x-Navbar selected="Rakit Laptop"/>
    <main>
        <x-Hero description="Buat Laptop Impianmu"/>
        <div id="Rakit" data-initial="{{ $rakit_laptop_json }}"></div>
        <div class="rakit_laptop__button_wrapper">
            <button class="rakit_laptop__button">Pesan Sekarang</button>
        </div>
    </main>
    <x-Footer />
    <script src="/js/rakit_laptop/Bootstrap.js"></script>
</body>
</html>
