@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="d-flex col-md-12 justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3 class="font-weight-bold">Dashboard Saya</h3>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="#" class="btn btn-sm btn-dark">Edit Deskripsi Profile Private Saya</a>
            <a href="#" class="btn btn-sm btn-success">Lihat Deskripsi Profile Private Saya</a>
        </div>
    </div>
    <div class="col-md-12">
        <div class="d-flex ">
          <h5 class="font-weight-bold text-danger">Kelas Private Saya</h5>
        </div>
        <div class="row">
          <div class="col-md-4 mt-3">
            <div class="card shadow-sm">
              <div class="d-flex justify-content-center p-3">
                <img src="{{asset('img/read.png')}}" style="width:100px;height:100px" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">Student A </h5>
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