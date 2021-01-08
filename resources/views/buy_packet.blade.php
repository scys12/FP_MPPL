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
          <h3 class="font-weight-bold">Beli Paket Pembelajaran</h3>
        </div>
        <div class="col-md-6 ml-auto mr-auto mt-5">
          @if ($one)
          <div class="card shadow-sm" style="margin:150px 0">
            <div class="card-body">
              Kamu sudah membeli paket Belajar Mandiri
            </div>
          </div>
          @else
            <form action="{{route('packet.buy')}}" method="POST">
              @csrf
              <div class="form-group">
                <label for="paket">Pilih Paket</label>
                  <select class="form-control" id="paket" name="paket">
                    @if (!$one)
                      <option value="1">Belajar Mandirit</option>
                    @endif
                  </select>
              </div>
              <div class="form-group">
                <label for="promo">Masukkan Kode Promo</label>
                <input type="email" class="form-control" id="promo">
              </div>
              <div class="form-group">
                <label for="price">Harga</label>
                <h3 style="color:var(--danger);font-weight:600">Rp. 200.000</h3>
                <input type="hidden" name="price" value="200000">
              </div>
              <div class="card bg-dark m-3" id="paket-belajar">
                <div class="card-body">
                  <ul>
                    <li style="color:white">Aktif selama sebulan setelah pembelian paket</li>
                    <li style="color:white">Akses seluruh video pembelajaran materi yang tersedia.</li>
                    <li style="color:white">Akses seluruh latihan soal yang tersedia.</li>
                  </ul>
                </div>
              </div>
              <div class="card bg-dark m-3" id="paket-private" style="display: none">
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
  <script>
    const paket = document.getElementById('paket');
    paket.addEventListener('change', (e) => {
      const paketBelajar = document.getElementById('paket-belajar');
      const paketPrivate = document.getElementById('paket-private');
      if (paket.value == 1) {
        paketBelajar.style.display = 'block';
        paketPrivate.style.display = 'none';
      }
      if (paket.value == 2) {
        paketPrivate.style.display = 'block';
        paketBelajar.style.display = 'none';
      }
    })
  </script>
@endsection