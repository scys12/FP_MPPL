@extends('layouts.app')

@section('content')
<div class="pt-6 pb-3">
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
                  <div class="card-body">
                    <div style="display: flex;flex-direction:row;justify-content: space-between">
                      <a class="mb-1 font-weight-bold" href="{{route('teacher.soal_materi.question.show', ['id' => $materi->id, 'question_id' => $question->id])}}">{{$question->question}}</a>
                      @if ($question->user_ids == Auth::user()->id)
                        <div class="icon d-flex" style="justify-content: center;align-items:end">
                          <span data-toggle="modal" data-target="#delete-modal" data-id="{{$question->id}}" style="font-size: 25px; color:#DC3545;cursor: pointer;" class="icon icon-delete btn-del"></span>
                          <a href="{{route('teacher.soal_materi.question.update', ['id' => $materi->id, 'question_id' => $question->id])}}">
                            <span style="font-size: 25px; color:#ffc107;cursor: pointer" class="icon icon-edit">
                            </span></a>                              
                        </div>
                      @endif
                    </div>                    
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
              <textarea name="question" id="question" class="form-control" cols="30" rows="10"></textarea>
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
</div>
<div class="modal fade" id="delete-modal" tabindex="-1" aria-labelledby="delete-modal-label" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header bg-danger">
              <h5 class="modal-title" style="display:flex; align-items:center;flex-direction:row" id="delete-modal-label">
                  <i class="fas fa-exclamation-triangle" style="color:var(--white)"></i>
                  <span class="ml-1" style="color:var(--white)">Hapus Pertanyaan</span>
              </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
              <div class="modal-body">
                  Apakah kamu yakin ingin menghapus ini <span class="type-data"></span> ?
              </div>
          <div class="modal-footer">
              <form action="{{route('teacher.soal_materi.question.delete', ['id' => $materi->id])}}" method="post" id="modal-form">
                  @csrf
                  @method('DELETE')
                  <input type="hidden" name="id" id="idDel">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-success">Remove</button>
              </form>
          </div>
      </div>
  </div>
</div>
<script>
  const btnDelete  = document.querySelectorAll('.btn-del');
  btnDelete.forEach( btn => {
      btn.addEventListener('click', (e) =>{
          const itemID = e.currentTarget.getAttribute('data-id');
          document.querySelector('#idDel').value = itemID;
      })
  });
</script>
@endsection