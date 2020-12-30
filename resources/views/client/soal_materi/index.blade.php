@extends('layouts.app')

@section('content')
<div class="container mb-3 mt-3">
  <div class="row justify-content-center">
    <div class="col-md-12">
      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
      @endif
    </div>
    <div>
      <h3>Semua Soal Materi</h3>
    </div>
    <div class="col-md-12">      
      <div class="row">
        @foreach ($soalMateri as $materi)
            <div class="col-md-4">
              <div class="card mt-3 shadow">
                <div class="d-flex justify-content-center">
                  <img src="{{ asset('img/presentation.png')}}" class="card-img-top" style="width: 300px; object-fit: contain; height:300px;" alt="...">
                </div>
                <div class="card-body d-flex justify-content-center" style="flex-direction: column">
                  <h5 class="card-title">{{$materi->name}}</h5>
                  <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                      @if (!$buy_one)
                        <a href="{{route('packet.buy')}}" class="btn btn-outline-danger btn-sm">Beli</a>                  
                      @endif
                      @if (count(\App\UserSoalMateri::where('user_ids', Auth::user()->id)->where('soal_materi_ids' , $materi->id)->get()) > 0)
                        <a href="{{route('soal_materi.show', ['id' => $materi->id])}}" class="btn btn-outline-secondary btn-sm">Detail</a>                      
                      @else 
                          <form action="{{route('soal_materi.attend', ['id' => $materi->id])}}" method="post">
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
      </div>      
      {{$soalMateri->links()}}
    </div>
  </div>
</div>
@endsection