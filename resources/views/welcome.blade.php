@extends('layouts.app')

@section('content')
<div class="col-md-12 bg-light" style="margin-top: -50px">  
  <div class="row" style="position: relative">
    <div class="bg-overlay"></div>
    <div class="bg-welcome">
      <div class="d-flex welcome-text container">
        <div style="display: flex;flex-direction:row;align-items:center">
          <div class="line-welcome"></div>
          <h3 class="welcome-title">Selamat Datang di Primalangga</h3>
          <div class="line-welcome"></div>
        </div>
        <p class="welcome-caption">Website Pembelajaran Terbaik</p>
      </div>
    </div>    
  </div>
</div>
<div class="col-md-12 p-3 bg-light">
  <div class="row">
    <div class="col-md-12">
      <div class="d-flex justify-content-center mt-3 mb-5">
        <h3 class="font-weight-bold">Belajar Makin Seru Dengan Primalangga</h3>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mt-3 mb-3 shadow">
        <div class="d-flex justify-content-center p-3">
          <img src="{{asset('img/read.png')}}" class="card-img-top" alt="..." style="width:120px;height:120px;">
        </div>
        <div class="card-body d-flex justify-content-center" style="flex-direction: column">
          <h5 class="card-title font-weight-bold">Pembelajaran Yang Keren</h5>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta suscipit, optio consequatur aliquid modi esse beatae ad facere maxime tempore?</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mt-3 mb-3 shadow">
        <div class="d-flex justify-content-center p-3">
          <img src="{{asset('img/read.png')}}" class="card-img-top" alt="..." style="width:120px;height:120px;">
        </div>
        <div class="card-body d-flex justify-content-center" style="flex-direction: column">
          <h5 class="card-title font-weight-bold">Sesi Diskusi Interaktif</h5>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta suscipit, optio consequatur aliquid modi esse beatae ad facere maxime tempore?</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mt-3 mb-3 shadow">
        <div class="d-flex justify-content-center p-3">
          <img src="{{asset('img/read.png')}}" class="card-img-top" alt="..." style="width:120px;height:120px;">
        </div>
        <div class="card-body d-flex justify-content-center" style="flex-direction: column">
          <h5 class="card-title font-weight-bold">Tentor Yang Kece</h5>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta suscipit, optio consequatur aliquid modi esse beatae ad facere maxime tempore?</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-md-12 p-3 bg-secondary">
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
            <li style="color:white">Dibimbing oleh pengajar yang handal </li>
          </ul>
        </div>
      </div>
    </div>
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
    <div class="col-md-12">
      <div class="row justify-content-center m-5">
        <button class="btn btn-dark">Lihat Produk</button>
      </div>
    </div>
  </div>
</div>
@endsection