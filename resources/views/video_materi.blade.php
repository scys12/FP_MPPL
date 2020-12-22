@extends('layouts.app')

@section('content')
<div class="container mb-3 mt-3">
  <div class="row justify-content-center">
    <div>
      <h3>Materi Biologi</h3>
    </div>
    <div class="col-md-12">      
      <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
          <video width="400" controls>
            <iframe width="727" height="409" src="https://www.youtube.com/embed/URUJD5NEXC8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi quis incidunt corrupti aperiam? Velit ipsam alias sunt at repudiandae necessitatibus fuga, maiores aut reiciendis ab officia, quo rem deserunt odio facilis ducimus magni quibusdam assumenda labore veniam nulla? Delectus eum, itaque veritatis deleniti eveniet aspernatur ut qui at in? Dignissimos velit soluta assumenda nam aliquam error, veritatis debitis, repellat eum dicta minima itaque, corporis placeat porro neque molestiae quis quaerat rerum cupiditate nemo est incidunt deserunt nobis enim. Aut iste dolorum rerum sint omnis iure non repellendus aspernatur magni laboriosam eos totam tenetur ratione in illo ipsam quis, deleniti quidem.</p>
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