@extends('layouts.app')

@section('content')
<div class="container mb-3 mt-3">
  <div class="row">
    <div class="col-md-12">
      <div class="card-body border-bottom">
        <h5 class="card-title font-weight-bold text-dark" style="font-size: 30px">Kenapa klorofil seperti itu</h5>
        <h6 class="card-subtitle mb-2 text-muted">ditanyakan oleh samuel</h6>
        <h6 class="card-subtitle mb-2 text-muted font-weight-bold">ditanyakan pada 10 November 2020</h6>
      </div>
    </div>
    <div class="col-md-12 mt-3">
      <div class="card-body border-bottom">
        <h5 class="card-title">Karena Klorofil merupakan ...</h5>
        <h6 class="card-subtitle mb-2 text-muted">dijawab oleh @samuel</h6>        
      </div>
    </div>
    <div class="col-md-12 mt-3">
      <div class="card-body border-bottom">
        <h5 class="card-title">Karena Klorofil merupakan ...</h5>
        <h6 class="card-subtitle mb-2 text-muted">dijawab oleh @samuel</h6>        
      </div>
    </div>
    <div class="col-md-12 mt-3">
      <div class="card-body border-bottom">
        <h5 class="card-title">Jawaban Anda</h5>
        <textarea id="editor">
          <p>Masukkan jawaban</p>
        </textarea>
        <div class="mt-3">
          <button class="btn btn-info">Post Jawaban</button>
        </div>
      </div>
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