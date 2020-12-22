@extends('layouts.app')

@section('content')
<div class="container mb-3 mt-3">
    <div class="row justify-content-center">
        <div class="mb-3">
          <h2 style="font-weight: 800;color:var(--dark)">Cara Pembayaran Paket Belajar Primalangga</h2>
        </div>
        <div class="col-md-12 mt-3">
          <p class="font-weight-bold">Transfer Bank / Transfer Virtual Account</p>
          <div class="card">
            <div class="card-body card-bayar shadow-sm" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              <div style="display: grid">
                <img src="{{asset('img/bca.png')}}" style="width: 50px;" alt="">
                <span style="font-size: 18px;font-weight:700">Bank BCA</span>
              </div>
              <div class="ml-auto">
                <i class="fas fa-angle-down"></i>
              </div>
            </div>
            <div class="collapse" id="collapseExample">
              <div class="card card-body">
                <li>Masukkan kartu, pilih bahasa, dan masukkan PIN sesuai petunguk di layar</li>
                <li>Pada menu utama, pilih Transaksi Lainnya</li>
                <li>Pilih Transfer dan pilih ke rekening BCA</li>
                <li>Masukkan nominal transfer sesuai dengan total tagihan transaksi di aplikasi Ruangguru</li>
                <li>Masukkan nomor rekening BCA yang tertera di aplikasi Ruangguru sebagai tujuan transfer</li>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 mt-3">
          <div class="card">
            <div class="card-body card-bayar shadow-sm" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              <div style="display: grid">
                <img src="{{asset('img/bni.png')}}" style="width: 50px;" alt="">
                <span style="font-size: 18px;font-weight:700">Bank BNI</span>
              </div>
              <div class="ml-auto">
                <i class="fas fa-angle-down"></i>
              </div>
            </div>
            <div class="collapse" id="collapseExample">
              <div class="card card-body">
                <li>Masukkan kartu, pilih bahasa, dan masukkan PIN sesuai petunguk di layar</li>
                <li>Pada menu utama, pilih Transaksi Lainnya</li>
                <li>Pilih Transfer dan pilih ke rekening BCA</li>
                <li>Masukkan nominal transfer sesuai dengan total tagihan transaksi di aplikasi Ruangguru</li>
                <li>Masukkan nomor rekening BCA yang tertera di aplikasi Ruangguru sebagai tujuan transfer</li>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 mt-3">
          <div class="card">
            <div class="card-body card-bayar shadow-sm" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              <div style="display: grid">
                <img src="{{asset('img/mandiri.png')}}" style="width: 50px;" alt="">
                <span style="font-size: 18px;font-weight:700">Bank Mandiri</span>
              </div>
              <div class="ml-auto">
                <i class="fas fa-angle-down"></i>
              </div>
            </div>
            <div class="collapse" id="collapseExample">
              <div class="card card-body">
                <li>Masukkan kartu, pilih bahasa, dan masukkan PIN sesuai petunguk di layar</li>
                <li>Pada menu utama, pilih Transaksi Lainnya</li>
                <li>Pilih Transfer dan pilih ke rekening BCA</li>
                <li>Masukkan nominal transfer sesuai dengan total tagihan transaksi di aplikasi Ruangguru</li>
                <li>Masukkan nomor rekening BCA yang tertera di aplikasi Ruangguru sebagai tujuan transfer</li>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 mt-3">
          <div class="card">
            <div class="card-body card-bayar shadow-sm" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              <div style="display: grid">
                <img src="{{asset('img/mandiri.png')}}" style="width: 50px;" alt="">
                <span style="font-size: 18px;font-weight:700">Bank BRI</span>
              </div>
              <div class="ml-auto">
                <i class="fas fa-angle-down"></i>
              </div>
            </div>
            <div class="collapse" id="collapseExample">
              <div class="card card-body">
                <li>Masukkan kartu, pilih bahasa, dan masukkan PIN sesuai petunguk di layar</li>
                <li>Pada menu utama, pilih Transaksi Lainnya</li>
                <li>Pilih Transfer dan pilih ke rekening BCA</li>
                <li>Masukkan nominal transfer sesuai dengan total tagihan transaksi di aplikasi Ruangguru</li>
                <li>Masukkan nomor rekening BCA yang tertera di aplikasi Ruangguru sebagai tujuan transfer</li>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
