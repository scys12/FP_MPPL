@extends('layouts.app')

@section('content')
<div class="container mb-3 mt-3">
  <div class="row justify-content-center">
    <div class="card shadow" style="width: 25rem;">
      <div class="d-flex justify-content-center p-3">
        <img src="{{asset('img/read.png')}}" class="card-img-top" style="width: 150px;height:150px" alt="...">
      </div>
      <div class="card-body">
        <h5 class="card-title font-weight-bold">Markus Silitonga</h5>
        <p class="card-text">Pengajar SMA</p>
        <p class="card-text">Jadwal Tentor</p>
        <ul>
          <li>Senin, 16.30-18.30</li>
          <li>Rabu, 16.30-18.30</li>
        </ul>
        <h6 class="font-weight-bold">Pendidikan Terakhir</h6>
        <p>Teknik Elektro UNJ</p>
      </div>
      <div class="d-flex justify-content-center m-3">
        <button class="btn btn-primary">
          Bayar Sekarang
        </button>
      </div>
    </div>
  </div>
</div>
@endsection