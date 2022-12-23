@extends('layouts.master')

@section('title', 'Items List')

@push('css_after')
    <style>
        td {
            max-width: 0;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
    </style>
@endpush
@section('content')

<html>
<head>
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
        <div class="left">
            <div class="icon">
                Toko Baru
            </div>
        </div>
        <div class="button">
            <a href="/order" class="order">Order Now!</a>
        </div>
    </div>
    <div class="background">
        <div class="backdrop"></div>
    </div>
    <div class="jumbotron" class="text-center">
        <img src="/img/th.jpg" class="rounded mx-auto d-block" height="200cm" width="1000"><br><br>
        <h2 class="text-center">Selamat Datang di Toko Baru</h2>
        <p class="text-center">Selamat berbelanja</p>
        <p class="text-center">Toko Baru menyediakan berbagai pakaian mulai dari pakaian dewasa, anak-anak, dan balita</p>
        <p class="text-center">Kualitas terjamin </p>
        <p class="text-center">Menerima Eceran maupun Glosir</p>
        <p class="text-center">Buka 08.00-17.00 WIB Minggu/Tgl Merah -> Libur</p>
    </div>
</body>
</html>
@endsection
