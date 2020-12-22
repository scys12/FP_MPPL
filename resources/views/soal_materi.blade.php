@extends('layouts.app')

@section('content')
<div class="container mb-3 mt-3">
  <div class="row justify-content-center">
    <div>
      <h3>Materi Biologi</h3>
    </div>    
    <div class="col-md-12">      
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="pertanyaan-tab" data-toggle="tab" href="#pertanyaan" role="tab" aria-controls="pertanyaan" aria-selected="true">Pertanyaan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="diskusi-tab" data-toggle="tab" href="#diskusi" role="tab" aria-controls="diskusi" aria-selected="false">Diskusi</a>
        </li>      
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="pertanyaan" role="tabpanel" aria-labelledby="pertanyaan">
          <div class="row">
            <div class="mt-3">
              <h4>Deskripsi</h4>
              <p>Soal tentang Biologi</p>
            </div>
            <div class="col-md-12 mt-3">
              <div class="row">
                <div class="card" style="width: 100%">
                  <div class="card-body">
                    1. Apa yang dimaksud dengan klorofile?
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 mt-3">
              <div class="row">
                <div class="card" style="width: 100%">
                  <div class="card-body">
                    2. Apa yang dimaksud dengan klorofile?
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 mt-3">
              <div class="row">
                <div class="card" style="width: 100%">
                  <div class="card-body">
                    3. Apa yang dimaksud dengan klorofile?
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 mt-3">
              <div class="row">
                <div class="card" style="width: 100%">
                  <div class="card-body">
                    4. Apa yang dimaksud dengan klorofile?
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 mt-3">
              <div class="row">
                <div class="card" style="width: 100%">
                  <div class="card-body">
                    5. Apa yang dimaksud dengan klorofile?
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 mt-3">
              <div class="row">
                <div class="card" style="width: 100%">
                  <div class="card-body">
                    6. Apa yang dimaksud dengan klorofile?
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="diskusi" role="tabpanel" aria-labelledby="diskusi">
          <div class="row">
            <div class="mt-3">
              <h4>Deskripsi</h4>
              <p>Diskusi Mengenai Kuis Ini</p>
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
</div>
@endsection