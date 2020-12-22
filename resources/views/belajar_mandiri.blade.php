@extends('layouts.app')

@section('content')
<div class="container mb-3 mt-3">
  <div class="row justify-content-center">
    <div>
      <h3>Belajar Mandirit</h3>
    </div>
    <div class="col-md-12">
      <div class="d-flex ">
        <a href="#" class="btn btn-warning">Lihat Semua Video Materi</a>
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
          <a href="#" class="btn btn-warning">Lihat Semua Soal Materi</a>
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
  </div>
</div>
@endsection