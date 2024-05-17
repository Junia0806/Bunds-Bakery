@extends('layouts.app')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('history') }}"class="btn btn-dark"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="col-md-12 mt-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('history') }}">Riwayat</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail Pesanan </li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <p><strong>PESANAN SUKSES!<br></strong> Lakukan Pembayaran Via Transfer ke Nomor Rekening <strong>1197-1473-563 a/n Sofiyah (BRI)</strong> dengan nominal <strong>Rp. {{ number_format($pesanan->kode+$pesanan->jumlah_harga) }}</strong>.</p>
                  <p>Segera <strong> Kirimkan Bukti Pembayaran </strong>ke <a href="https://wa.me/6281333468527"class="btn " target="_blank"><i class="fa-brands fa-whatsapp"></i></i> Owner</a> Agar Pesanan Anda Segera Disiapkan.</p>
                </div>
              </div>
              <br>
                <div class="card">
                    <div class="card-body">
                        <h3><i class="fa-solid fa-circle-info"></i> Detail Pesanan</i></h3>
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
                                            <td>Rp. {{ number_format($pesanan_detail->barang->harga) }}</td>
                                            <td>Rp. {{ number_format($pesanan_detail->jumlah_harga) }}</td>

                                        </tr>
                                    @endforeach

                                    <tr>
                                        <td colspan="5" align="right"><strong>Total Harga :</strong></td>
                                        <td>Rp. {{ number_format($pesanan->jumlah_harga) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" align="right"><strong>Kode Unik :</strong></td>
                                        <td>Rp. {{ number_format($pesanan->kode) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" align="right"><strong>TOTAL YANG HARUS DI TRANSFER :</strong>
                                        </td>
                                        <td><strong>Rp. {{ number_format($pesanan->kode+$pesanan->jumlah_harga) }}</strong>
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
