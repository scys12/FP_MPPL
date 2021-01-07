@extends('layouts.app')

@section('content')
<div class="container mb-3 mt-3">
  <div class="row justify-content-center">
    <div class="card shadow-sm col-md-6">
      <div class="d-flex justify-content-center p-3">
        <img src="{{asset('img/read.png')}}" class="card-img-top" style="width: 150px;height:150px" alt="...">
      </div>
      <div class="card-body">
        <h5 class="card-title font-weight-bold">Kelas {{$class->name}}</h5>
        <h6 class="font-weight-bold">Jadwal Tentor</h6>
        <ul>
          @if ($class->hari_pertama == 1)
            <li>Senin, 16.30-18.30</li>
          @elseif($class->hari_pertama == 2)
            <li>Selasa, 16.30-18.30</li>
          @elseif($class->hari_pertama == 3)
            <li>Rabu, 16.30-18.30</li>
          @elseif($class->hari_pertama == 4)
            <li>Kamis, 16.30-18.30</li>
          @elseif($class->hari_pertama == 5)
            <li>Jumat, 16.30-18.30</li>
          @elseif($class->hari_pertama == 6)
            <li>Sabtu, 16.30-18.30</li>
          @elseif($class->hari_pertama == 7)
            <li>Minggu, 16.30-18.30</li>
          @endif
          @if ($class->hari_kedua == 1)
            <li>Senin, 16.30-18.30</li>
          @elseif($class->hari_kedua == 2)
            <li>Selasa, 16.30-18.30</li>
          @elseif($class->hari_kedua == 3)
            <li>Rabu, 16.30-18.30</li>
          @elseif($class->hari_kedua == 4)
            <li>Kamis, 16.30-18.30</li>
          @elseif($class->hari_kedua == 5)
            <li>Jumat, 16.30-18.30</li>
          @elseif($class->hari_kedua == 6)
            <li>Sabtu, 16.30-18.30</li>
          @elseif($class->hari_kedua == 7)
            <li>Minggu, 16.30-18.30</li>
          @endif
        </ul>
        <h6 class="font-weight-bold">Pendidikan Terakhir</h6>
        <p>Teknik Elektro UNJ</p>
        <h6 class="font-weight-bold">Deskripsi</h6>
        {!! $class->description !!}
        @isset($class->zoom)
          <div class="mb-3">
            <h6 class="font-weight-bold">
              Link Zoom
            </h6>
            <a href="{{url('http://'.$class->zoom)}}">Link Zoom</a>
          </div>
        @endisset
        <hr>
        <form action="{{route('teacher.class.zoom', ['id' => $class->id ])}}" method="post">
          @csrf
          <div class="form-group">
            <h6 class="font-weight-bold">
              Link Zoom
            </h6>
            <input type="text" class="form-control @error('zoom') is-invalid @enderror" id="zoom" required name="zoom" value="{{ old('zoom') }}" required>
          </div>
          <button class="btn btn-primary" type="submit">Upload Link Zoom</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection