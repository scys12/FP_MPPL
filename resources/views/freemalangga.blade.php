@extends('layouts.app')

@section('content')
<div class="container mb-3 mt-3">
  <div class="row">
    <div>
      <h2 class="font-weight-bold">Free Course Primalangga</h2>
    </div>
    @foreach ($freemalangga as $free)
    <div class="col-md-12">
      <div class="card mt-3 shadow-sm">
        <div class="card-body">
          <a href="{{route('freemalangga.show', ['id' => $free->id])}}" style="font-size:18px;" class="card-title">{{$free->name}}</a>
          <p class="card-text">Free Course</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection