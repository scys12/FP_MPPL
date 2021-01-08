@extends('layouts.app')

@section('content')
<div class="pt-6 pb-3">
  <div class="container">
    <div class="row justify-content-center">
      <div>
        <h3>{{$video_materi->name}}</h3>
      </div>
      <div class="col-md-12">      
        <div class="row">
          <div class="col-md-12 d-flex justify-content-center">
            <video controls width="" height="480">
              <source src="{{asset('/storage/'.$video_materi->link)}}" type="video/mp4">
            </video>
          </div>        
        </div>
        <ul class="nav nav-tabs mt-3" id="myTab" role="tablist">
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
              <p>{!! $video_materi->description !!}</p>
            </div>
          </div>
          <div class="tab-pane fade" id="diskusi" role="tabpanel" aria-labelledby="diskusi">
            <div class="mt-5 mb-3">
              <h4>Jawab Siswa</h4>
            </div>
            @foreach ($questions as $question)
              <div class="col-md-12 mt-3">
                <div class="row">
                  <div class="card" style="width: 100%">
                    <div class="card-body">
                      <div style="display: flex;flex-direction:row;justify-content: space-between">
                        <a class="mb-1 font-weight-bold" href="{{route('teacher.video_materi.question.show', ['id' => $video_materi->id, 'question_id' => $question->id])}}">{{$question->question}}</a>
                        @if ($question->user_ids == Auth::user()->id)
                          <div class="icon d-flex" style="justify-content: center;align-items:end">
                            <span data-toggle="modal" data-target="#delete-modal" data-id="{{$question->id}}" style="font-size: 25px; color:#DC3545;cursor: pointer;" class="icon icon-delete btn-del"></span>
                            <a href="{{route('teacher.video_materi.question.update', ['id' => $video_materi->id, 'question_id' => $question->id])}}">
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
            <form action="{{route('teacher.video_materi.question.insert', ['id' => $video_materi->id])}}" method="post">
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
              <form action="{{route('teacher.video_materi.question.delete', ['id' => $video_materi->id])}}" method="post" id="modal-form">
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