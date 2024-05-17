@extends('layouts.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" type="css" href="/public/css/style.css">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 mb-4">

                {{-- Fitur Search --}}
                <div class="container-fluid-center">
                    <form action="home" method="GET">
                       
                            {{-- yang penting type sama nama --}}
                            <input class="form-control" id="cari" type="search" placeholder="Temukan Kue Kesukaanmu Sekarang!"
                                aria-label="Search" name="search">
                    </form>
                </div>

            </div>

            @foreach ($barangs as $barang)
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ url('upload/barang/') }}/{{ $barang->gambar }}" class="card-img-top" alt="..."
                            height="200px">
                        <div class="card-body">
                            <h5 class="card-title">{{ $barang->nama_barang }}</h5>
                            <p class="card-text">
                                <strong> Rp. {{ number_format($barang->harga) }} <br> </strong>
                            </p>
                            <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn">Detail Produk</a>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
            @endforeach
            {{-- pagination --}}
            {{ $barangs->links() }}
        </div>
        <script src="https://kit.fontawesome.com/c6d8f06459.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
    </div>
@endsection
