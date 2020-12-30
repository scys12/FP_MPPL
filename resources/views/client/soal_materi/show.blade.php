@extends('layouts.app')

@section('content')
<div class="container mb-3 mt-3">
  <div class="row justify-content-center">
    <div>
      <h3>{{$soal_materi->name}}</h3>
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
              <p>
                {!! $soal_materi->description !!}
              </p>
            </div>
            <div class="col-md-12 mt-3">
              <div class="row">
                <div class="card" style="width: 100%">
                  <div class="card-body">
                    <div class="pertanyaan">
                      1. {{$soal_materi->pertanyaan1}}
                    </div>
                    <div class="card-body card-bayar p-0 mt-3 mb-3" data-toggle="collapse" data-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                      <strong>Lihat Jawaban</strong>
                      <div class="ml-auto">
                        <i class="fas fa-angle-down"></i>
                      </div>
                    </div>
                    <div class="collapse" id="collapse-1">
                      <div class="card card-body">
                        {{$soal_materi->jawaban1}}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 mt-3">
              <div class="row">
                <div class="card" style="width: 100%">
                  <div class="card-body">
                    <div class="pertanyaan">
                      2. {{$soal_materi->pertanyaan2}}
                    </div>
                    <div class="card-body card-bayar p-0 mt-3 mb-3" data-toggle="collapse" data-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                      <strong>Lihat Jawaban</strong>
                      <div class="ml-auto">
                        <i class="fas fa-angle-down"></i>
                      </div>
                    </div>
                    <div class="collapse" id="collapse-2">
                      <div class="card card-body">
                        {{$soal_materi->jawaban2}}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 mt-3">
              <div class="row">
                <div class="card" style="width: 100%">
                  <div class="card-body">
                    <div class="pertanyaan">
                      3. {{$soal_materi->pertanyaan3}}
                    </div>
                    <div class="card-body card-bayar p-0 mt-3 mb-3" data-toggle="collapse" data-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                      <strong>Lihat Jawaban</strong>
                      <div class="ml-auto">
                        <i class="fas fa-angle-down"></i>
                      </div>
                    </div>
                    <div class="collapse" id="collapse-3">
                      <div class="card card-body">
                        {{$soal_materi->jawaban3}}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 mt-3">
              <div class="row">
                <div class="card" style="width: 100%">
                  <div class="card-body">
                    <div class="pertanyaan">
                      4. {{$soal_materi->pertanyaan4}}
                    </div>
                    <div class="card-body card-bayar p-0 mt-3 mb-3" data-toggle="collapse" data-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                      <strong>Lihat Jawaban</strong>
                      <div class="ml-auto">
                        <i class="fas fa-angle-down"></i>
                      </div>
                    </div>
                    <div class="collapse" id="collapse-4">
                      <div class="card card-body">
                        {{$soal_materi->jawaban4}}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 mt-3">
              <div class="row">
                <div class="card" style="width: 100%">
                  <div class="card-body">
                    <div class="pertanyaan">
                      5. {{$soal_materi->pertanyaan5}}
                    </div>
                    <div class="card-body card-bayar p-0 mt-3 mb-3" data-toggle="collapse" data-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                      <strong>Lihat Jawaban</strong>
                      <div class="ml-auto">
                        <i class="fas fa-angle-down"></i>
                      </div>
                    </div>
                    <div class="collapse" id="collapse-5">
                      <div class="card card-body">
                        {{$soal_materi->jawaban5}}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 mt-3">
              <div class="row">
                <div class="card" style="width: 100%">
                  <div class="card-body">
                    <div class="pertanyaan">
                      6. {{$soal_materi->pertanyaan6}}
                    </div>
                    <div class="card-body card-bayar p-0 mt-3 mb-3" data-toggle="collapse" data-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                      <strong>Lihat Jawaban</strong>
                      <div class="ml-auto">
                        <i class="fas fa-angle-down"></i>
                      </div>
                    </div>
                    <div class="collapse" id="collapse-6">
                      <div class="card card-body">
                        {{$soal_materi->jawaban6}}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 mt-3">
              <div class="row">
                <div class="card" style="width: 100%">
                  <div class="card-body">
                    <div class="pertanyaan">
                      7. {{$soal_materi->pertanyaan7}}
                    </div>
                    <div class="card-body card-bayar p-0 mt-3 mb-3" data-toggle="collapse" data-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">
                      <strong>Lihat Jawaban</strong>
                      <div class="ml-auto">
                        <i class="fas fa-angle-down"></i>
                      </div>
                    </div>
                    <div class="collapse" id="collapse-7">
                      <div class="card card-body">
                        {{$soal_materi->jawaban7}}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 mt-3">
              <div class="row">
                <div class="card" style="width: 100%">
                  <div class="card-body">
                    <div class="pertanyaan">
                      8. {{$soal_materi->pertanyaan8}}
                    </div>
                    <div class="card-body card-bayar p-0 mt-3 mb-3" data-toggle="collapse" data-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">
                      <strong>Lihat Jawaban</strong>
                      <div class="ml-auto">
                        <i class="fas fa-angle-down"></i>
                      </div>
                    </div>
                    <div class="collapse" id="collapse-8">
                      <div class="card card-body">
                        {{$soal_materi->jawaban8}}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 mt-3">
              <div class="row">
                <div class="card" style="width: 100%">
                  <div class="card-body">
                    <div class="pertanyaan">
                      9. {{$soal_materi->pertanyaan9}}
                    </div>
                    <div class="card-body card-bayar p-0 mt-3 mb-3" data-toggle="collapse" data-target="#collapse-9" aria-expanded="false" aria-controls="collapse-9">
                      <strong>Lihat Jawaban</strong>
                      <div class="ml-auto">
                        <i class="fas fa-angle-down"></i>
                      </div>
                    </div>
                    <div class="collapse" id="collapse-9">
                      <div class="card card-body">
                        {{$soal_materi->jawaban9}}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 mt-3">
              <div class="row">
                <div class="card" style="width: 100%">
                  <div class="card-body">
                    <div class="pertanyaan">
                      10. {{$soal_materi->pertanyaan10}}
                    </div>
                    <div class="card-body card-bayar p-0 mt-3 mb-3" data-toggle="collapse" data-target="#collapse-10" aria-expanded="false" aria-controls="collapse-10">
                      <strong>Lihat Jawaban</strong>
                      <div class="ml-auto">
                        <i class="fas fa-angle-down"></i>
                      </div>
                    </div>
                    <div class="collapse" id="collapse-10">
                      <div class="card card-body">
                        {{$soal_materi->jawaban10}}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="diskusi" role="tabpanel" aria-labelledby="diskusi">
          <div class="mt-5 mb-3">
            <h4>Tanya Pengajar Mengenai Materi Ini</h4>
          </div>
          @foreach ($questions as $question)
            <div class="col-md-12 mt-3">
              <div class="row">
                <div class="card" style="width: 100%">
                  <div class="card-body" style="display: flex;flex-direction:column;">
                    <a class="mb-1 font-weight-bold" href="{{route('soal_materi.question.show', ['id' => $soal_materi->id, 'question_id' => $question->id])}}">{{$question->question}}</a>
                    <small>Ditanyakan pada {{$question->created_at}}</small>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
          <form action="{{route('soal_materi.question.insert', ['id' => $soal_materi->id])}}" method="post">
            @csrf
            <div class="form-group mt-3">
              <label for="" class="font-weight-bold">Tanya Pengajar</label>
              <textarea name="question" id="question" class="form-control" cols="30" rows="10">
              </textarea>
              @error('question')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
              <input type="hidden" name="type" value="2">
            </div>
            <button class="btn btn-primary btn-sm">Insert Question</button>
          </form>
        </div>
      </div>      
    </div>
  </div>
</div>
@endsection