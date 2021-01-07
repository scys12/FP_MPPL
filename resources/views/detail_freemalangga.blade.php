@extends('layouts.app')

@section('content')
<div class="container mb-3 mt-3">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card shadow">
        <div class="card-body">
          <h5 class="font-weight-bold card-title">{{$freemalangga->name}}</h5>
          <h6 class="card-subtitle mb-5 text-muted">{{$freemalangga->created_at}}</h6>
          <p class="card-text">{!! $freemalangga->description !!}</p>          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection