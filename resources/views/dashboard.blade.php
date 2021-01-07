@extends('layouts.app')

@section('content')
<div class="container mb-3 mt-3">
  <div class="row justify-content-center">
    <div>
      <h3 class="font-weight-bold">Dashboard Saya</h3>
    </div>
    <div class="col-md-12">
        @isset($one)
          <div class="alert alert-secondary" role="alert">
            Paket <strong>Belajar Mandiri</strong> Anda aktif dari <strong>{{$one->date_started}}</strong> hingga <strong>{{$one->date_end}}</strong>
          </div>
        @endisset
        @isset($two)
          <div class="alert alert-secondary" role="alert">
            Paket <strong>Kelas Privat</strong> Anda aktif dari <strong>{{$two->date_started}}</strong> hingga <strong>{{$two->date_end}}</strong>
          </div>
        @endisset
    </div>
    <div class="col-md-12">
      <div class="d-flex ">
        <h5 class="font-weight-bold text-danger">Video Materi Yang Saya Ikuti</h5>
      </div>
      <div class="row">
        @if (count($userVideoMateri) && $one)
          @foreach ($userVideoMateri as $materi)
            <div class="col-md-4">
              <div class="card mt-3 shadow">
                <div class="d-flex justify-content-center">
                  <img src="{{ asset('img/presentation.png')}}" class="card-img-top" style="width: 300px; object-fit: contain; height:300px;" alt="...">
                </div>
                <div class="card-body d-flex justify-content-center" style="flex-direction: column">
                  <h5 class="card-title">{{$materi->video_materi->name}}</h5>
                  <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                      @if (!$one)
                        <a href="{{route('packet.buy')}}" class="btn btn-outline-danger btn-sm">Beli</a>                  
                      @endif
                      @if (count(\App\UserVideoMateri::where('user_ids', Auth::user()->id)->where('video_materi_ids' , $materi->video_materi->id)->get()) > 0)
                        <a href="{{route('video_materi.show', ['id' => $materi->video_materi->id])}}" class="btn btn-outline-secondary btn-sm">Detail</a>                      
                      @else 
                          <form action="{{route('video_materi.attend', ['id' => $materi->video_materi->id])}}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-outline-danger btn-sm">Ambil Kelas</button>
                          </form>
                        @endif
                    </div>
                  </div>
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
          <h5 class="font-weight-bold text-danger">Soal Materi Yang Saya Jawab</h5>
        </div>
        <div class="row">
          @if (count($userSoalMateri) && $one)
            @foreach ($userSoalMateri as $materi)
              <div class="col-md-4">
                <div class="card mt-3 shadow">
                  <div class="d-flex justify-content-center">
                    <img src="{{ asset('img/presentation.png')}}" class="card-img-top" style="width: 300px; object-fit: contain; height:300px;" alt="...">
                  </div>
                  <div class="card-body d-flex justify-content-center" style="flex-direction: column">
                    <h5 class="card-title">{{$materi->soal_materi->name}}</h5>
                    <div class="btn-toolbar mb-2 mb-md-0">
                      <div class="btn-group mr-2">
                        @if (!$one)
                          <a href="{{route('packet.buy')}}" class="btn btn-outline-danger btn-sm">Beli</a>                  
                        @endif
                        @if (count(\App\UserSoalMateri::where('user_ids', Auth::user()->id)->where('soal_materi_ids' , $materi->soal_materi->id)->get()) > 0)
                          <a href="{{route('soal_materi.show', ['id' => $materi->soal_materi->id])}}" class="btn btn-outline-secondary btn-sm">Detail</a>                      
                        @else 
                            <form action="{{route('soal_materi.attend', ['id' => $materi->soal_materi->id])}}" method="post">
                              @csrf
                              <button type="submit" class="btn btn-outline-danger btn-sm">Ambil Kelas</button>
                            </form>
                          @endif
                      </div>
                    </div>
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
    <div class="col-md-12 mt-5">
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
                    <h5 class="card-title">{{$class->private_class->user->name}}</h5>
                    <p class="card-text font-weight-bold">{{$class->private_class->name}}</p>
                    <hr>
                    <a href="{{route('private.show', ['id' => $class->private_class->id ])}}" class="btn btn-primary">Lihat Detail</a>
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
@endsection