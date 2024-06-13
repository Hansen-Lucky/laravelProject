<!doctype html>
<html lang="en">

<head>
    <title>hansenluckygunawan.github.io</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>

    <header>
        <nav class="navbar">
            <div class="logo">
                Porto<span style="color: rgb(255, 92, 198);">Hans</span>
            </div>
            <a class="toggler-navbar">
                <div class="hamburger-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>
        </nav>
        <div class="sidebar">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>
        <script src="assets/script.js"></script>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <h1>Copyright &copy <span style="color: rgb(255, 92, 198);"> Hansen Lucky Gunawan | 2023</span></h1>
    </footer>

</body>

</html>
