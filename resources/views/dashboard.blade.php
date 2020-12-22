@extends('layouts.app')

@section('content')
<div class="container mb-3 mt-3">
  <div class="row justify-content-center">
    <div>
      <h3 class="font-weight-bold">Dashboard Saya</h3>
    </div>
    <div class="col-md-12">
      <div class="d-flex ">
        <h5 class="font-weight-bold text-danger">Video Materi Yang Saya Ikuti</h5>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card mt-3 shadow">
            <div class="d-flex justify-content-center">
              <img src="{{ asset('img/presentation.png')}}" class="card-img-top" style="width: 300px; object-fit: contain; height:300px;" alt="...">
            </div>
            <div class="card-body d-flex justify-content-center">
              <a href="" class="btn btn-sm btn-info">Materi A</a>
            </div>
          </div>
        </div>        
        <div class="col-md-4">
          <div class="card mt-3 shadow">
            <div class="d-flex justify-content-center">
              <img src="{{ asset('img/presentation.png')}}" class="card-img-top" style="width: 300px; object-fit: contain; height:300px;" alt="...">
            </div>
            <div class="card-body d-flex justify-content-center">
              <a href="" class="btn btn-sm btn-info">Materi A</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12 mt-5">
        <div class="d-flex ">
          <h5 class="font-weight-bold text-danger">Soal Materi Yang Saya Jawab</h5>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card mt-3 shadow">
              <div class="d-flex justify-content-center">
                <img src="{{ asset('img/presentation.png')}}" class="card-img-top" style="width: 300px; object-fit: contain; height:300px;" alt="...">
              </div>
              <div class="card-body d-flex justify-content-center">
                <a href="" class="btn btn-sm btn-info">Soal Materi A</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mt-3 shadow">
              <div class="d-flex justify-content-center">
                <img src="{{ asset('img/presentation.png')}}" class="card-img-top" style="width: 300px; object-fit: contain; height:300px;" alt="...">
              </div>
              <div class="card-body d-flex justify-content-center">
                <a href="" class="btn btn-sm btn-info">Soal Materi A</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mt-3 shadow">
              <div class="d-flex justify-content-center">
                <img src="{{ asset('img/presentation.png')}}" class="card-img-top" style="width: 300px; object-fit: contain; height:300px;" alt="...">
              </div>
              <div class="card-body d-flex justify-content-center">
                <a href="" class="btn btn-sm btn-info">Soal Materi A</a>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="col-md-12 mt-5">
        <div class="d-flex ">
          <h5 class="font-weight-bold text-danger">Kelas Private Saya</h5>
        </div>
        <div class="row">
          <div class="col-md-4 mt-3">
            <div class="card shadow">
              <div class="d-flex justify-content-center p-3">
                <img src="{{asset('img/read.png')}}" style="width:100px;height:100px" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">Markus Silitonga </h5>
                <p class="card-text">Pengajar SMA</p>
                <hr>
                <a href="#" class="btn btn-primary">Lihat Info Detail</a>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection