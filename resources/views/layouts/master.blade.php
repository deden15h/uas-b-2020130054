<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'ItemDB') | Pemesanan</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('css_after')
</head>

<body>
    {{-- Top Navbar --}}
    {{-- <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <a class="navbar-brand"href="/">
            <i class="fa fa-film fa-fw" aria-hidden="true"></i>
            <span class="menu-collapsed">Pemesanan</span>
        </a>
    </nav> --}}

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="/"><img src="/img/th.jpg" height="40cm"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/items">Item List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/items/create">Add New Item</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/order">Order</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    {{-- Top Navbar END --}}
    <div class="row" id="body-row">


        {{-- Content --}} <div class="col p-4"> @yield('content') </div>
        {{-- Content END --}}
    </div>


    <script src="{{ asset('js/app.js') }}"></script> @stack('js_after')


</body>
{{-- <footer class="mastfoot mt-auto">
    <div class="inner">
        <p> ©{{ date('Y') }} <a href="/items">STMIK Likmi</a> </p>
    </div>
</footer> --}}

</html>
