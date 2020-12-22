@extends('layouts.app')

@section('content')
<div class="container mb-3 mt-3">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="d-flex justify-content-center">
              <h3 style="font-size:30px" class="font-weight-bold">Produk Primalangga</h3>              
            </div>
            <h5 class="mt-3 mb-3" style="font-weight:600">Nikmati produk-produk berkualitas dari Primalangga</h5>
            <div class="row">
              <div class="col-md-4 mt-4">
                <div class="card shadow">
                  <div class="p-3">
                    <img src="{{asset('img/read.png')}}" width="30px" height="200px" class="card-img-top" alt="...">
                  </div>
                  <div class="card-body bg-dark text-center">
                    <p class="card-text text-white" style="font-size:20px;font-weight:700;">Belajar Mand<strong>irit</strong></p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mt-4">
                <div class="card shadow">
                  <div class="p-3">
                    <img src="{{asset('img/secret-file.png')}}" width="30px" height="200px" class="card-img-top" alt="...">
                  </div>
                  <div class="card-body bg-dark text-center">
                    <p class="card-text text-white" style="font-size:20px;font-weight:700;">Primalangga Private</p>
                  </div>
                </div>
              </div>              
              <div class="col-md-4 mt-4">
                <div class="card shadow">
                  <div class="p-3">
                    <img src="{{asset('img/tag.png')}}" width="30px" height="200px" class="card-img-top" alt="...">
                  </div>
                  <div class="card-body bg-dark text-center">
                    <p class="card-text text-white" style="font-size:20px;font-weight:700;">Freemalangga</p>
                  </div>
                </div>
              </div>
            </div>
        </div>        
    </div>
</div>
<div class="col-md-12 mt-3 p-3 bg-secondary">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="card shadow">
        <div class="p-3">
          <img src="{{asset('img/read.png')}}" width="30px" height="200px" class="card-img-top" alt="...">
        </div>
        <div class="card-body bg-dark text-center">
          <p class="card-text text-white" style="font-size:20px;font-weight:700;">Belajar Mand<strong>irit</strong></p>
          <h3 class="text-white">Rp. 200.000</h3>
          <ul>
            <li style="color:white">Aktif selama sebulan setelah pembelian paket</li>
            <li style="color:white">Akses seluruh video pembelajaran materi yang tersedia.</li>
            <li style="color:white">Akses seluruh latihan soal yang tersedia.</li>
          </ul>
        </div>
      </div>
    </div>            
  </div>
</div>
<div class="col-md-12 bg-info p-3">
<div class="row justify-content-center">
  <div class="col-md-4">
    <div class="card shadow">
      <div class="p-3">
        <img src="{{asset('img/secret-file.png')}}" width="30px" height="200px" class="card-img-top" alt="...">
      </div>
      <div class="card-body bg-dark text-center">
        <p class="card-text text-white" style="font-size:20px;font-weight:700;">Primalangga Private</p>
        <h3 class="text-white">Rp. 200.000</h3>
        <ul>
          <li style="color:white">Pembelajaran selama 2 kali seminggu selama sebulan penuh</li>
          <li style="color:white">Dibimbing oleh pengajar yang handal dibidangnya</li>
        </ul>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
