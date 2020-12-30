@extends('layouts.app')

@section('content')
<div class="container mb-3 mt-3">
  <div class="row">
    <div class="col-md-12">
      <h2 class="font-weight-bold" style="color: var(--dark)">Lihat Tentor Pengajar Terbaik Primalangga</h2>
    </div>
    @foreach ($private as $class)
      <div class="col-md-4 mt-3">
        <div class="card shadow">
          <div class="d-flex justify-content-center p-3">
            <img src="{{asset('img/read.png')}}" style="width:100px;height:100px" class="card-img-top" alt="...">
          </div>
          <div class="card-body">
            <h5 class="card-title">{{$class->user->name}} </h5>
            <h6 class="card-subtitle mb-2 text-muted">Rp200.000</h6>
            <p class="card-text">{{$class->name}}</p>
            <hr>
            <a href="{{route('private.show', ['id' => $class->id ])}}" class="btn btn-primary">Lihat Detail</a>
          </div>
        </div>
      </div>
    @endforeach
    {{$private->links()}}      
</div>
@endsection