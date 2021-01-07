@extends('layouts.app')

@section('content')
<div class="container mb-3 mt-3">
  <div class="row justify-content-center">
    <div>
      <h3>{{$video_materi->name}}</h3>
    </div>
    <div class="col-md-12">      
      <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
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
                  <div class="card-body" style="display: flex;flex-direction:column;">
                    <a class="mb-1 font-weight-bold" href="{{route('teacher.video_materi.question.show', ['id' => $video_materi->id, 'question_id' => $question->id])}}">{{$question->question}}</a>
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
@endsection