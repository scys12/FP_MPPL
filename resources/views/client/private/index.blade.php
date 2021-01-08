@extends('layouts.app')

@section('content')
<div class="bg-light pt-6 pb-3">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
          <h2 class="" style="color: var(--dark)">Lihat Tentor Pengajar Terbaik Primalangga</h2>
        </div>
        @foreach ($private as $class)
          <div class="col-md-4 mt-3">
            <div class="card shadow">
              <div class="d-flex justify-content-center p-3">
                <img src="{{asset('img/read.png')}}" style="width:100px;height:100px" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">Kelas {{$class->name}}</h5>
                <h6 class="card-title">Tentor: {{$class->user->name}} </h5>
                <hr>
                <div class="d-flex" style="flex-direction: row;justify-content: space-between;align-items: baseline">
                  <a href="{{route('private.show', ['id' => $class->id ])}}" class="btn btn-primary">Lihat Detail</a>
                  <h6 class="card-subtitle mb-2 text-muted">Rp200.000</h6>
                </div>
              </div>
            </div>
          </div>
        @endforeach
        {{$private->links()}}      
    </div>
  </div>
</div>
@endsection