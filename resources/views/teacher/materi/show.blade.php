@extends('layouts.app')

@section('content')
<div class="container mb-3 mt-3">
  <div class="row justify-content-center">
    <div>
      <h3>{{$materi->name}}</h3>
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
                {!! $materi->description !!}
              </p>
            </div>
            <div class="col-md-12 mt-3">
              <div class="row">
                <div class="card" style="width: 100%">
                  <div class="card-body">
                    <div class="pertanyaan">
                      1. {{$materi->pertanyaan1}}
                    </div>
                    <div class="jawaban">
                      <strong>Jawaban : </strong> {{$materi->jawaban1}}
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
                      2. {{$materi->pertanyaan2}}
                    </div>
                    <div class="jawaban">
                      <strong>Jawaban : </strong> {{$materi->jawaban2}}
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
                      3. {{$materi->pertanyaan3}}
                    </div>
                    <div class="jawaban">
                      <strong>Jawaban : </strong> {{$materi->jawaban3}}
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
                      4. {{$materi->pertanyaan4}}
                    </div>
                    <div class="jawaban">
                      <strong>Jawaban : </strong> {{$materi->jawaban4}}
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
                      5. {{$materi->pertanyaan5}}
                    </div>
                    <div class="jawaban">
                      <strong>Jawaban : </strong> {{$materi->jawaban5}}
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
                      6. {{$materi->pertanyaan6}}
                    </div>
                    <div class="jawaban">
                      <strong>Jawaban : </strong> {{$materi->jawaban6}}
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
                      7. {{$materi->pertanyaan7}}
                    </div>
                    <div class="jawaban">
                      <strong>Jawaban : </strong> {{$materi->jawaban7}}
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
                      8. {{$materi->pertanyaan8}}
                    </div>
                    <div class="jawaban">
                      <strong>Jawaban : </strong> {{$materi->jawaban8}}
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
                      9. {{$materi->pertanyaan9}}
                    </div>
                    <div class="jawaban">
                      <strong>Jawaban : </strong> {{$materi->jawaban9}}
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
                      10. {{$materi->pertanyaan10}}
                    </div>
                    <div class="jawaban">
                      <strong>Jawaban : </strong> {{$materi->jawaban10}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="diskusi" role="tabpanel" aria-labelledby="diskusi">
          <div class="mt-3">
            <h4>Deskripsi</h4>
            <p>Diskusi Mengenai Kuis Ini</p>
          </div>
          @foreach ($questions as $question)
          <div class="col-md-12 mt-3">
            <div class="row">
              <div class="card" style="width: 100%">
                <div class="card-body" style="display: flex;flex-direction:column;">
                  <a class="mb-1 font-weight-bold" href="{{route('teacher.soal_materi.question.show', ['id' => $materi->id, 'question_id' => $question->id])}}">{{$question->question}}</a>
                  <small>Ditanyakan pada {{$question->created_at}}</small>
                </div>
              </div>
            </div>
          </div>
        @endforeach
        <form action="{{route('teacher.soal_materi.question.insert', ['id' => $materi->id])}}" method="post">
          @csrf
          <div class="form-group mt-3">
            <label for="" class="font-weight-bold">Jawab Siswa</label>
            <textarea name="question" id="question" class="form-control" cols="30" rows="10">
            </textarea>
            @error('question')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <input type="hidden" name="type" value="1">
          </div>
          <button class="btn btn-primary btn-sm">Insert Question</button>
        </form>
        </div>
      </div>      
    </div>
  </div>
</div>
@endsection