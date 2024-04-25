<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/custom.css') }}">

        <title>{{ $title ?? 'Page Title' }}</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('/images/logo-light.png') }}">

    </head>

    <body>
        <header class="dark-bg full-width py-3">
            <div class="row d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 bold">
                <div class="col-2 mb-2 mb-md-0">
                    <a href="/" wire:navigate.hover class="d-inline-flex link-body-emphasis text-decoration-none">
                        <img src="{{ asset('/images/logo-light.png') }}" width="100">
                    </a>
                </div>
                <div class="col-8">
                    <ul class="nav mb-2 justify-content-center">
                        <li><a href="/" wire:navigate.hover class="nav-link px-5">HOME</a></li>
                        <li><a href="/menu" wire:navigate.hover class="nav-link px-5">OUR MENU</a></li>
                        <li><a href="/about" wire:navigate.hover class="nav-link px-5">ABOUT US</a></li>
                    </ul>
                </div>
                <div class="col-2 text-end">
                    <button type="button" class="btn btn-primary">
                        <a href="#" class="nav-link text-black">ORDER ONLINE</a>
                    </button>
                </div>
            </div>
        </header>

        <main>
        {{ $slot }}
        </main>
    
        <footer class="dark-bg py-3">
            <ul class="nav justify-content-center border-bottom border-white pb-4 mb-4" style="--bs-border-opacity: .5;">
                <li class="nav-item"><a href="/" wire:navigate.hover  class="nav-link px-2">Home</a></li>
                <li class="nav-item"><a href="about" wire:navigate.hover  class="nav-link px-2">About</a></li>
                <li class="nav-item"><a href="menu" wire:navigate.hover  class="nav-link px-2">Menu</a></li>
            </ul>
            <p class="text-center text-secondary">© 2022 Company, Inc</p>
        </footer>

        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
        
    </body>

</html>
