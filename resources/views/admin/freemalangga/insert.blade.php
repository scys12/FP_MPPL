@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="d-flex col-md-12 justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Tambah Freemalangga</h1>      
    </div>
    <div class="col-md-8 shadow mb-3 p-5">
      <form action="{{route('admin.freemalangga.insert')}}" method="post">
          @csrf
          <div class="form-group">
              <label for="name">Nama Materi</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" required name="name" value="{{ old('name') }}">
              @error('name')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
          </div>
          <div class="form-group">
              <label for="deskripsi">Deskripsi Materi</label>
              <textarea name="description" id="description" class="form-control"></textarea>
              @error('deskripsi')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
          </div>          
          <button type="submit" class="btn btn-secondary m-3">Tambah Freemalangga</button>
      </form>
    </div>
  </div>
</div>
<script>
  const editor = ClassicEditor
  .create( document.querySelector( '#description' ) )
  .then( editor => {
      console.log( editor );
  } )
  .catch( error => {
      console.error( error );
  } );
  const inputFile = document.getElementById('link-file');
  inputFile.addEventListener("input", (e) => {
      const file = e.target.files[0];
      if (file) {
          document.getElementById('filename').innerHTML = file.name;
      }
  });
</script>
@endsection