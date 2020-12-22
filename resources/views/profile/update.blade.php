@extends('layouts.userlayout')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 shadow">
        <div class="p-3">
          <h3 class="font-weight-bold">Update Profile</h3>
          <hr>
        </div>
        <form action="" class="p-3">
          <label for="exampleInputEmail1">Photo</label>
          <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" id="validatedCustomFile" required>
            <label class="custom-file-label" for="validatedCustomFile">Choose New Profile...</label>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="Samuel Sinambela">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="samuel@gmail.com">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Lokasi</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="Surabaya">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Nomor Telepon</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="+6282273710028">
          </div>
          <div class="d-flex justify-content-center mt-3 mb-4">
            <button type="submit" class="btn btn-lg btn-secondary">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection