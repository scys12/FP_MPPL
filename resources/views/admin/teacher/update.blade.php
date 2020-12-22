@extends('layouts.useradmin')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="d-flex col-md-12 justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Update Pengajar</h1>      
    </div>
    <div class="col-md-8 shadow mb-3 p-5">
      <form method="post">
          @csrf
          <div class="form-group">
              <label for="name">Nama Pengajar</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" required name="name" value="{{ old('name') }}">
              @error('name')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
          </div>
          <div class="form-group">
              <label for="email">Email Pengajar</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" required name="email" value="{{ old('email') }}">
              @error('name')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
          </div>
          <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" required name="password" value="{{ old('password') }}">
              @error('name')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
          </div>
          <div class="form-group">
            <label for="password_confirmation">Konfirmasi Password</label>
            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" required name="password_confirmation" value="{{ old('password_confirmation') }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
          <button type="submit" class="btn btn-secondary m-3">Update Pengajar</button>
      </form>
    </div>
  </div>
</div>
@endsection