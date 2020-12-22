@extends('layouts.userlayout')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow m-3">
        <div class="m-4">
          <div class="d-flex" style="justify-content: space-between;align-items:flex-start">
            <h3 class="font-weight-bold" style="color:var(--gray)">Profile Saya</h3>
            <a href="#" class="btn btn-secondary btn-sm">Update Profile</a>
          </div>
          <hr>
        </div>
        <div class="d-flex justify-content-center m-3">
          <img src="{{asset('img/read.png')}}" style="width:200px;height:200px" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <div class="row">
              <div class="col-md-6 bg-secondary p-3 shadow-sm">
                <h5 class="font-weight-bold mr-3">Nama</h5>
                <h5 class="card-text">samuel</h5>
              </div>
              <div class="col-md-6 bg-primary text-white p-3 shadow-sm">
                <h5 class="font-weight-bold mr-3">Email</h5>
                <h5 class="card-text">samuel@gmail.com</h5>
              </div>
              <div class="col-md-6 bg-success text-white p-3 shadow-sm">
                <h5 class="font-weight-bold mr-3">Asal</h5>
                <h5 class="card-text">Surabaya</h5>
              </div>
              <div class="col-md-6 bg-dark text-white p-3 shadow-sm">
                <h5 class="font-weight-bold mr-3">Nomor Telepon</h5>
                <h5 class="card-text">+6282273710028</h5>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection