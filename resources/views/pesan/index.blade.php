@extends('layouts.app')
<script src="https://kit.fontawesome.com/c6d8f06459.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('home') }}"class="btn btn-dark"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="col-md-12 mt-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('home') }}">Katalog Produk</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $barang->nama_barang }}</li>
                    </ol>
                </nav>
            </div>
            <div class="card">
                <div class="col-md-12 mt-1">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ url('upload/barang/') }}/{{ $barang->gambar }}"
                                    class="rounded mx-auto d-block" width="80%">
                            </div>
                            <div class="col-md-6 mt-5">
                                <strong>
                                    <h2> {{ $barang->nama_barang }} </h2>
                                </strong>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Harga</td>
                                            <td>:</td>
                                            <td>Rp. {{ number_format($barang->harga) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Stok</td>
                                            <td>:</td>
                                            <td>{{ number_format($barang->stok) }} box</td>
                                        </tr>
                                        <tr>
                                            <td>Pre Order</td>
                                            <td>:</td>
                                            <td> 2 hari</td>
                                        </tr>
                                        <tr>
                                            <td>Keterangan</td>
                                            <td>:</td>
                                            <td> {{ $barang->keterangan }}</td>
                                        </tr>
                                        <tr>
                                            <td>Kuantitas</td>
                                            <td>:</td>
                                            <td>
                                                <form action="" method="post" action="{{url ('pesan')}}/{{$barang->id}}">
                                                  @csrf
                                                    <input type="text" name="jumlah_pesan" class="form-control"
                                                        required="" placeholder="Masukkan minimal 1">
                                                        <br>
                                                        <button type="submit" class="btn btn-success mt-2"><i class="fa-solid fa-cart-shopping"></i> Masukkan Keranjang
                                                        </button>
                                                      </form>
                                            </td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
