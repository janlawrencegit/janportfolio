<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jan's Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('../css/app.css') }}" rel="stylesheet">

</head>
<body data-bs-spy="scroll" data-bs-target="#navbarNav" data-bs-offset="70" tabindex="0">
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#home">Jan's Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto fw-medium">
                    @if(!empty($navbar) && $navbar->count())
                        @foreach ($navbar as $navItem)
                            <li class="nav-item">
                                <a class="nav-link" href="#{{ $navItem->section }}">
                                    {{ $navItem->navtitle }}
                                </a>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <main class="pt-5">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var elem = document.querySelector('.masonry-grid');
            if (elem) {
                new Masonry(elem, {
                    itemSelector: '.masonry-item',
                    columnWidth: '.masonry-sizer',
                    percentPosition: true,
                    gutter: 20
                });
            }
        });
    </script>
</body>
</html>
