<header class="header_wrapper">
    <div class="header">
        <div class="logo">
            <strong>Assembly</strong>
        </div>
        <ul class="nav">
            <li class="nav_item">
                <a class="{{ $selected === 'Beranda' ? 'nav_active' : 'nav_not_active'}}" href="{{ route('home')}}">Beranda</a>
            </li>
            <li class="nav_item">
                <a class="{{ $selected === 'Semua Produk' ? 'nav_active' : 'nav_not_active'}}" href="{{ route('semua-produk')}}">Semua Produk</a>
            </li>
            <li class="nav_item">
                <a class="{{ $selected === 'Rakit Laptop' ? 'nav_active' : 'nav_not_active'}}" href="{{ route('rakit-laptop')}}">Rakit Laptop</a>
            </li>
        </ul>
    </div>
</header>