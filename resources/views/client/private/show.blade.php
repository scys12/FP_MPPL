@extends('layouts.app')

@section('content')
<div class="bg-light pt-6 pb-3">
  <div class="container pt-3 pb-3">
      <h3>Kelas Private</h3>
      <div style="display: flex;justify-content: center;flex-direction: column;align-items: center;">
        <div class="col-md-6 mb-3">
          <div class="card shadow-sm">
            <div class="d-flex justify-content-center p-3">
              <img src="{{asset('img/read.png')}}" class="card-img-top" style="width: 150px;height:150px" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title font-weight-bold">{{$private->private_class->user->name}}</h5>
              <h5 class="card-title">Kelas {{$private->private_class->name}}</h5>
              <h6 class="font-weight-bold">Jadwal Tentor</h6>
              <ul>
                @if ($private->private_class->hari_pertama == 1)
                  <li>Senin, 16.30-18.30</li>
                @elseif($private->private_class->hari_pertama == 2)
                  <li>Selasa, 16.30-18.30</li>
                @elseif($private->private_class->hari_pertama == 3)
                  <li>Rabu, 16.30-18.30</li>
                @elseif($private->private_class->hari_pertama == 4)
                  <li>Kamis, 16.30-18.30</li>
                @elseif($private->private_class->hari_pertama == 5)
                  <li>Jumat, 16.30-18.30</li>
                @elseif($private->private_class->hari_pertama == 6)
                  <li>Sabtu, 16.30-18.30</li>
                @elseif($private->private_class->hari_pertama == 7)
                  <li>Minggu, 16.30-18.30</li>
                @endif
                @if ($private->private_class->hari_kedua == 1)
                  <li>Senin, 16.30-18.30</li>
                @elseif($private->private_class->hari_kedua == 2)
                  <li>Selasa, 16.30-18.30</li>
                @elseif($private->private_class->hari_kedua == 3)
                  <li>Rabu, 16.30-18.30</li>
                @elseif($private->private_class->hari_kedua == 4)
                  <li>Kamis, 16.30-18.30</li>
                @elseif($private->private_class->hari_kedua == 5)
                  <li>Jumat, 16.30-18.30</li>
                @elseif($private->private_class->hari_kedua == 6)
                  <li>Sabtu, 16.30-18.30</li>
                @elseif($private->private_class->hari_kedua == 7)
                  <li>Minggu, 16.30-18.30</li>
                @endif
              </ul>
              <h6 class="font-weight-bold">Pendidikan Terakhir</h6>
              <p>Teknik Elektro UNJ</p>
              <h6 class="font-weight-bold">Deskripsi</h6>
              {!! $private->private_class->description !!}            
            </div>
            @if (!$buy)
              <div class="d-flex justify-content-center m-3">
                <a href="{{route('packet.buy.private', ['id' => $private->private_class->id])}}" class="btn btn-primary">
                  Bayar Sekarang
                </a>
              </div>
            @endif
          </div>
        </div>
        @if ($buy && isset($private->zoom))
          <div class="col-md-6">
            <div class="card shadow-sm">
              <div class="card-body">
                <h5 class="font-weight-bold">
                  Link Zoom Pembelajaran
                </h5>
                <a href="{{url('http://'.$private->zoom)}}" class="btn btn-danger btn-sm">Link Zoom</a>              
              </div>
            </div>
          </div>            
        @endif
      </div>
    </div>
  </div>
@endsection