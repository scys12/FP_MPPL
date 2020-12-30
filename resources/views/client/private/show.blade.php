@extends('layouts.app')

@section('content')
<div class="container mb-3 mt-3">
  <div class="row justify-content-center">
    <div class="card shadow-sm col-md-6">
      <div class="d-flex justify-content-center p-3">
        <img src="{{asset('img/read.png')}}" class="card-img-top" style="width: 150px;height:150px" alt="...">
      </div>
      <div class="card-body">
        <h5 class="card-title font-weight-bold">{{$private->user->name}}</h5>
        <h5 class="card-title">Kelas {{$private->name}}</h5>
        <h6 class="font-weight-bold">Jadwal Tentor</h6>
        <ul>
          @if ($private->hari_pertama == 1)
            <li>Senin, 16.30-18.30</li>
          @elseif($private->hari_pertama == 2)
            <li>Selasa, 16.30-18.30</li>
          @elseif($private->hari_pertama == 3)
            <li>Rabu, 16.30-18.30</li>
          @elseif($private->hari_pertama == 4)
            <li>Kamis, 16.30-18.30</li>
          @elseif($private->hari_pertama == 5)
            <li>Jumat, 16.30-18.30</li>
          @elseif($private->hari_pertama == 6)
            <li>Sabtu, 16.30-18.30</li>
          @elseif($private->hari_pertama == 7)
            <li>Minggu, 16.30-18.30</li>
          @endif
          @if ($private->hari_kedua == 1)
            <li>Senin, 16.30-18.30</li>
          @elseif($private->hari_kedua == 2)
            <li>Selasa, 16.30-18.30</li>
          @elseif($private->hari_kedua == 3)
            <li>Rabu, 16.30-18.30</li>
          @elseif($private->hari_kedua == 4)
            <li>Kamis, 16.30-18.30</li>
          @elseif($private->hari_kedua == 5)
            <li>Jumat, 16.30-18.30</li>
          @elseif($private->hari_kedua == 6)
            <li>Sabtu, 16.30-18.30</li>
          @elseif($private->hari_kedua == 7)
            <li>Minggu, 16.30-18.30</li>
          @endif
        </ul>
        <h6 class="font-weight-bold">Pendidikan Terakhir</h6>
        <p>Teknik Elektro UNJ</p>
        <h6 class="font-weight-bold">Deskripsi</h6>
        {!! $private->description !!}
        @if ($buy && isset($private->zoom))
          <h5 class="font-weight-bold">
            Link Zoom Pembelajaran
          </h5>
          <a href="{{url('http://'.$private->zoom)}}" class="btn btn-danger btn-sm">Link Zoom</a>
        @endif
      </div>
      @if (!$buy)
        <div class="d-flex justify-content-center m-3">
          <a href="{{route('packet.buy.private', ['id' => $private->id])}}" class="btn btn-primary">
            Bayar Sekarang
          </a>
        </div>
      @endif
    </div>
  </div>
</div>
@endsection