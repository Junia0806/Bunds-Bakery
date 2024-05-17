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
                        <li class="breadcrumb-item active" aria-current="page">Riwayat</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3><i class="fa-solid fa-clock-rotate-left"></i> Riwayat Pemesanan</i></h3>
                        <table class="table table-striped">
                          <thead>
                              <tr>
                                  <th>No</th>
                                  <th>Tanggal</th>
                                  <th>Nomor Pesanan</th>
                                  <th>Status</th>
                                  <th>Jumlah Harga</th>
                                  <th>Aksi</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php $no = 1; ?>
                              @foreach ($pesanans as $pesanan)
                                  <tr>
                                      <td>{{ $no++ }}</td>
                                      <td>{{$pesanan->tanggal}}</td>
                                      <td>00{{$pesanan->id}}</td>
                                     <td>
                                      @if ($pesanan->status == 1)
                                          Diproses
                                      @else
                                          Selesai
                                      @endif
                                     </td>
                                     <td>
                                      Rp. {{ number_format($pesanan->jumlah_harga+$pesanan->kode) }}
                                     </td>
                                     <td>
                                      <a href="{{url('history')}}/{{$pesanan->id}}" class="btn btn-outline-dark"><i class="fa-solid fa-circle-info"></i> Detail </a>
                                     </td>
                                  </tr>
                              @endforeach
                          </tbody>

                      </table>
                    </div>

                </div>

            </div>

        </div>
    @endsection
