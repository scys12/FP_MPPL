@extends('layouts.app')

@section('content')
<div class="container mb-3 mt-3">
  <div class="row justify-content-center">
    <div>
      <h3>Semua Soal Materi</h3>
    </div>
    <div class="col-md-12">      
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
      <div class="d-flex justify-content-center mt-3">
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>
@endsection