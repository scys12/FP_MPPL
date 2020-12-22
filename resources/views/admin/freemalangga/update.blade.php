@extends('layouts.useradmin')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="d-flex col-md-12 justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Update Freemalangga</h1>      
    </div>
    <div class="col-md-8 shadow mb-3 p-5">
      <form method="post">
          @csrf
          <div class="form-group">
              <label for="name">Nama Materi</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" required name="name" value="Cara pengkalsifikasian Taksonomi">
              @error('name')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
          </div>
          <div class="form-group">
              <label for="deskripsi">Deskripsi Materi</label>
              <textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed tempore minus iste obcaecati sint laboriosam numquam ducimus natus voluptates ipsa veniam necessitatibus fuga corporis et dignissimos consectetur aperiam repudiandae velit, recusandae ullam labore deleniti! Neque, labore eius. Eius nemo expedita animi asperiores voluptatibus, possimus, sequi numquam quisquam optio totam nihil, ad consequatur repellendus. Nostrum vero veritatis natus, perspiciatis saepe nulla. Neque, id molestias. Numquam ea consequatur delectus reiciendis velit nesciunt impedit repudiandae laboriosam soluta, voluptates, nobis voluptatibus architecto illo fugiat cupiditate! In, dolorum maxime minus illum voluptate cupiditate repellat nisi! Rerum in ad ducimus non deserunt ullam harum vel atque.</textarea>
              @error('deskripsi')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
          </div>          
          <button type="submit" class="btn btn-secondary m-3">Update Freemalangga</button>
      </form>
    </div>
  </div>
</div>
@endsection 