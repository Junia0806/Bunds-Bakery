@extends('layouts.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" type="css" href="/public/css/style.css">
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
                        <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Keranjang</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3><i class="fa-solid fa-basket-shopping"></i> Keranjang</i></h3>
                        @if (!empty($pesanan))
                            <p align="right">Tanggal Pemesanan : {{ $pesanan->tanggal }}</p>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Foto Produk</th>
                                        <th>Nama</th>
                                        <th>Kuantitas</th>
                                        <th>Harga Satuan</th>
                                        <th>Subtotal Harga</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($pesanan_details as $pesanan_detail)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>
                                                <img src="{{ url('upload/barang/') }}/{{ $pesanan_detail->barang->gambar }}"
                                                    alt="..." height="100px">
                                            </td>
                                            <td>{{ $pesanan_detail->barang->nama_barang }}</td>
                                            <td>{{ $pesanan_detail->jumlah }} box </td>
                                            <td >Rp. {{ number_format($pesanan_detail->barang->harga) }}</td>
                                            <td >Rp. {{ number_format($pesanan_detail->jumlah_harga) }}</td>
                                            <td>
                                                <form action="{{ url('check-out') }}/{{ $pesanan_detail->id }}"
                                                    method="post">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Anda yakin akan menghapus produk?');"><i
                                                            class="fa fa-trash"></i> Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="5" align="right"><strong>Total Harga :</strong></td>
                                        <td ><strong>Rp. {{ number_format($pesanan->jumlah_harga) }}</strong>
                                        </td>
                                        <td>
                                            <a href="{{ url('konfirmasi-check-out') }}" class="btn btn-success"
                                                onclick="return confirm('Anda yakin akan Check Out?');">
                                                <i class="fa fa-shopping-cart"></i> Check Out
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        @endif
                    </div>

                </div>

            </div>

        </div>
    @endsection
