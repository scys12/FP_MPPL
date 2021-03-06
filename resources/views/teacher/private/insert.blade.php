@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="d-flex col-md-12 justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Masukkan Info Private</h1>      
    </div>
    <div class="col-md-8 shadow mb-3 p-5">
      <form enctype="multipart/form-data" method="post">
          
          <div class="form-group">
              <label for="deskripsi">Deskripsi Info</label>
              <div id="editor">
                  <p>Masukkan jawabanmu</p>
              </div>
              @error('deskripsi')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
          </div>          
          <button type="submit" class="btn btn-secondary m-3">Tambah Info Private</button>
      </form>
    </div>
  </div>
</div>
<script>
  ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );
</script>
@endsection