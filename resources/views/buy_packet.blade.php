@extends('layouts.app')

@section('content')
  <div class="container mb-3 mt-3">
    <div class="row">
      <div class="col-md-12">
        <div>
          <h3 class="font-weight-bold">Beli Paket Pembelajaran</h3>
        </div>
        <div class="col-md-6 ml-auto mr-auto mt-5">
          <form action="">
            <div class="form-group">
              <label for="paket">Pilih Paket</label>
                <select class="form-control" id="paket">
                  <option>Belajar Mandirit</option>
                  <option>Primalangga Private</option>
                </select>
            </div>
            <div class="form-group">
              <label for="promo">Masukkan Kode Promo</label>
              <input type="email" class="form-control" id="promo">
            </div>
            <div class="form-group">
              <label for="price">Harga</label>
              <h3 style="color:var(--danger);font-weight:600">Rp. 200.000</h3>
            </div>
            <div class="card bg-dark m-3">
              <div class="card-body">
                <ul>
                  <li style="color:white">Aktif selama sebulan setelah pembelian paket</li>
                  <li style="color:white">Akses seluruh video pembelajaran materi yang tersedia.</li>
                  <li style="color:white">Akses seluruh latihan soal yang tersedia.</li>
                </ul>
              </div>
            </div>
            <div class="d-flex justify-content-center">
              <button class="btn btn-success">
                Beli Sekarang
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection