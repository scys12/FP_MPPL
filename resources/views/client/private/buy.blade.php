@extends('layouts.app')

@section('content')
  <div class="container mb-3 mt-3">
    <div class="row">
      <div class="col-md-12">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div>
          <h3 class="font-weight-bold">Beli Paket Kelas Private</h3>
        </div>
        <div class="col-md-6 ml-auto mr-auto mt-5">
          @if ($two)
              <p>Kamu sudah membeli paket belajar Kelas Private ini</p>
          @else
            <form action="{{route('packet.buy.private', ['id' => $private->id])}}" method="POST">
              @csrf
              <div class="form-group">
                <label for="paket">Pilih Paket</label>
                  <select class="form-control" id="paket" name="paket">
                    @if (!$two)
                      <option value="2">Primalangga Private</option>
                    @endif
                  </select>
              </div>
              <div class="form-group">
                <label for="promo">Masukkan Kode Promo</label>
                <input type="email" class="form-control" id="promo">
              </div>
              <div class="form-group">
                <label for="promo">Nama Pengajar</label>
                <p class="font-weight-bold">{{$private->user->name}}</p>
              </div>
              <div class="form-group">
                <label for="promo">Kelas Private</label>
                <p class="font-weight-bold">{{$private->name}}</p>
              </div>
              <div class="form-group">
                <label for="price">Harga</label>
                <h3 style="color:var(--danger);font-weight:600">Rp. 200.000</h3>
                <input type="hidden" name="price" value="200000">
              </div>
              <div class="card bg-dark m-3" id="paket-private">
                <div class="card-body">
                  <ul>
                    <li style="color:white">Pembelajaran selama 2 kali seminggu selama sebulan penuh</li>
                    <li style="color:white">Dibimbing oleh pengajar yang handal dibidangnya</li>
                    <li style="color:white">Dibimbing oleh pengajar yang handal</li>
                  </ul>
                </div>
              </div>
              <div class="d-flex justify-content-center">
                <button class="btn btn-success">
                  Beli Sekarang
                </button>
              </div>
            </form>
          @endif
        </div>
      </div>
    </div>
  </div>  
@endsection