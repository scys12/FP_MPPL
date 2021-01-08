@extends('layouts.app')

@section('content')
<div class="bg-light pt-6 pb-3">
  <div class="container">
    <div class="row justify-content-center">
      <div class="d-flex col-md-12 justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h3 class="font-weight-bold">Dashboard Saya</h3>
      </div>
      <div class="col-md-12">
        <div class="d-flex ">
          <h5 class="font-weight-bold text-danger">Video Materi saya</h5>
        </div>
        <div class="row">
          @if (count($userVideoMateri))
            @foreach ($userVideoMateri as $materi)
              <div class="col-md-4">
                <div class="card mt-3 shadow">
                  <div class="d-flex justify-content-center">
                    <img src="{{ asset('img/presentation.png')}}" class="card-img-top" style="width: 300px; object-fit: contain; height:300px;" alt="...">
                  </div>
                  <div class="card-body d-flex justify-content-center" style="flex-direction: column">
                    <h5 class="card-title">{{$materi->name}}</h5>
                    <a href="{{route('teacher.video_materi.show', ['id' => $materi->id])}}" class="btn btn-outline-secondary btn-sm">Detail</a>                                        
                  </div>
                </div>
              </div>
            @endforeach
          @else
            <div class="card card-body">
              <p>Tidak ada Video Materi</p>
            </div>
          @endif
        </div>
        <div class="col-md-12 mt-5">
          <div class="d-flex ">
            <h5 class="font-weight-bold text-danger">Soal Materi saya</h5>
          </div>
          <div class="row">
            @if (count($userSoalMateri))
              @foreach ($userSoalMateri as $materi)
                <div class="col-md-4">
                  <div class="card mt-3 shadow">
                    <div class="d-flex justify-content-center">
                      <img src="{{ asset('img/presentation.png')}}" class="card-img-top" style="width: 300px; object-fit: contain; height:300px;" alt="...">
                    </div>
                    <div class="card-body d-flex justify-content-center" style="flex-direction: column">
                      <h5 class="card-title">{{$materi->name}}</h5>
                      <a href="{{route('teacher.materi.show', ['id' => $materi->id])}}" class="btn btn-outline-secondary btn-sm">Detail</a>                                                              
                    </div>
                  </div>
                </div>
              @endforeach
            @else
                <div class="card card-body">
                  <p>Tidak ada Soal Materi</p>
                </div>
            @endif
          </div>
      </div>
      <div class="col-md-12 mt-5 mb-3">
          <div class="d-flex ">
            <h5 class="font-weight-bold text-danger">Kelas Private Saya</h5>
          </div>
          <div class="row">
            @if (count($privateClass) > 0)
              @foreach ($privateClass as $class)
                <div class="col-md-4 mt-3">
                  <div class="card shadow">
                    <div class="d-flex justify-content-center p-3">
                      <img src="{{asset('img/read.png')}}" style="width:100px;height:100px" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">{{$class->user->name}}</h5>
                      <p class="card-text font-weight-bold">{{$class->name}}</p>
                      <hr>
                      <a href="{{route('teacher.class.show', ['id' => $class->id ])}}" class="btn btn-primary">Lihat Detail</a>
                    </div>
                  </div>
                </div>
              @endforeach
            @else
              <div class="card card-body">
                <p>Tidak ada Kelas Private</p>
              </div>
            @endif
          </div>
      </div>
    </div>
    </div>
  </div>
</div>
@endsection