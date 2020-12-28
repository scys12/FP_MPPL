@extends('layouts.app')

@section('content')
<div class="container mb-3 mt-3">
  <div class="row justify-content-center">
    <div>
      <h3>Materi Biologi</h3>
    </div>
    <div class="col-md-12">      
      <div class="row">
        <div class="col-md-12 mb-3 d-flex justify-content-center">
          <video controls width="50%" height="480">
            <source src="{{asset('/storage/'.$video_materi->link)}}" type="video/mp4">
          </video>
        </div>
      </div>
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="deskripsi-tab" data-toggle="tab" href="#deskripsi" role="tab" aria-controls="deskripsi" aria-selected="true">Deskripsi Materi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="diskusi-tab" data-toggle="tab" href="#diskusi" role="tab" aria-controls="diskusi" aria-selected="false">Tanya Pengajar</a>
        </li>      
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="deskripsi" role="tabpanel" aria-labelledby="deskripsi">
          <div class="mt-3">
            <h4>Deskripsi</h4>
            <p>
              {!! $video_materi->description !!}
            </p>
          </div>
        </div>
        <div class="tab-pane fade" id="diskusi" role="tabpanel" aria-labelledby="diskusi">
          <div class="mt-5 mb-3">
            <h4>Tanya Pengajar Mengenai Materi Ini</h4>
          </div>
          <div class="col-md-12 mt-3">
            <div class="row">
              <div class="card" style="width: 100%">
                <div class="card-body" style="display: flex;flex-direction:column;">
                  <a class="mb-1 font-weight-bold" href="">Kenapa Klorofil seperti itu ?</a>
                  <small>Ditanyakan pada 10 November 2020</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 mt-3">
            <div class="row">
              <div class="card" style="width: 100%">
                <div class="card-body" style="display: flex;flex-direction:column;">
                  <a class="mb-1 font-weight-bold" href="">Kenapa Klorofil seperti itu ?</a>
                  <small>Ditanyakan pada 10 November 2020</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection