@extends('layouts.app')

@section('content')
<div class="bg-light pt-6 pb-3">
  <div class="container">
    <div class="row justify-content-center">
      <div>
        <h3>Semua Video Materi</h3>
      </div>    
      <div class="col-md-12">      
        <div class="row">
          @foreach ($videoMateri as $materi)
          <div class="col-md-4">
            <div class="card mt-3 shadow">
              <div class="d-flex justify-content-center">
                <img src="{{ asset('img/presentation.png')}}" class="card-img-top" style="width: 300px; object-fit: contain; height:300px;" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">{{$materi->name}}</h5>
                <h6 class="card-subtitle mb-2 text-muted mr-2">Tentor: {{$materi->user->username}}</h6>
                <hr>
                <div class="btn-toolbar mb-2 mb-md-0">
                  <div class="btn-group mr-2">
                    @if (!$buy_one)
                      <a href="{{route('packet.buy')}}" class="btn btn-outline-danger btn-sm">Beli</a>                  
                    @endif
                    @if (count(\App\UserVideoMateri::where('user_ids', Auth::user()->id)->where('video_materi_ids' , $materi->id)->get()) > 0)
                      <a href="{{route('video_materi.show', ['id' => $materi->id])}}" class="btn btn-outline-secondary btn-sm">Detail</a>                      
                    @else 
                        <form action="{{route('video_materi.attend', ['id' => $materi->id])}}" method="post">
                          @csrf
                          <button type="submit" class="btn btn-outline-danger btn-sm">Ambil Video Materi</button>
                        </form>
                      @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach        
        </div>
        {{$videoMateri->links()}}
      </div>
    </div>
  </div>
</div>
@endsection