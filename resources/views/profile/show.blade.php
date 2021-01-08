@extends('layouts.app')

@section('content')
<div class="container pt-6">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow m-3">
        <div class="m-4">
          <div class="d-flex" style="justify-content: space-between;align-items:flex-start">
            <h3 class="font-weight-bold" style="color:var(--gray)">Profile Saya</h3>
            <a href="{{route('profile.update')}}" class="btn btn-secondary btn-sm">Update Profile</a>
          </div>
          <hr>
        </div>
        <div class="d-flex justify-content-center m-3">
          <img src="{{asset('img/read.png')}}" style="width:200px;height:200px" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <div class="row">
              <div class="col-md-6 bg-light p-3 shadow-sm">
                <h5 class="font-weight-bold mr-3">Nama</h5>
                <h5 class="card-text">{{Auth::user()->name}}</h5>
              </div>
              <div class="col-md-6 bg-light text-white p-3 shadow-sm">
                <h5 class="font-weight-bold mr-3">Email</h5>
                <h5 class="card-text">{{Auth::user()->email}}</h5>
              </div>
              <div class="col-md-6 bg-light text-white p-3 shadow-sm">
                <h5 class="font-weight-bold mr-3">Username</h5>
                <h5 class="card-text">{{Auth::user()->username}}</h5>
              </div>
              <div class="col-md-6 bg-light text-white p-3 shadow-sm">
                <h5 class="font-weight-bold mr-3">Nomor Telepon</h5>
                <h5 class="card-text">{{Auth::user()->phone_number}}</h5>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection