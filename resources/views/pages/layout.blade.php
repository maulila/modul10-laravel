
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Belajar Laravel 12</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            color: #292929;
            background-color: #ffffff;
        }

        /* Navbar */
        .navbar {
            width: 100%;
            background-color: #3268f5;
            color: white;
        }

        .container {
            width: 80%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .navbar-content {
            min-height: 38px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
        }

        .brand {
            font-size: 12px;
            font-weight: bold;
            white-space: nowrap;
        }

        .menu {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .menu a {
            color: white;
            text-decoration: none;
            font-size: 11px;
        }

        .menu a:hover {
            text-decoration: underline;
        }

        /* Konten halaman */
        .content {
            width: 80%;
            max-width: 1200px;
            margin: 15px auto;
        }

        h2 {
            margin: 0 0 5px;
            font-size: 16px;
            font-weight: bold;
        }

        p {
            margin: 0;
            font-size: 16px;
            line-height: 1.5;
        }

        /* Tampilan layar kecil */
        @media (max-width: 600px) {
            .container,
            .content {
                width: 92%;
            }

            .navbar-content {
                flex-direction: column;
                align-items: flex-start;
                padding: 10px 0;
                gap: 10px;
            }

            .menu {
                flex-wrap: wrap;
                gap: 10px;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="container navbar-content">

            <div class="brand">
                Belajar Laravel 12
            </div>

            <div class="menu">
                <a href="/">Beranda</a>
                <a href="/about">Tentang Kami</a>
                <a href="/contact">Kontak</a>
                <a href="/product">Produk Kami</a>
            </div>

        </div>
    </nav>

    <main class="content">
        @yield('content')
    </main>
</body>
</html>
