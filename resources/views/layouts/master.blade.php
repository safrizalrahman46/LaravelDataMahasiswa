<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <a href="/web/beranda">Beranda</a> |
            <a href="/web/profil">Profil</a> |
            <a href="/web/kontak">Kontak</a> |
        </nav>
    </header>
    <br><br>

    @yield('namahalaman')

    @yield('konten')
    <br><br>
    <footer>
        &copy; 2023-Safrizal Rahman
    </footer>
</body>
</html>
