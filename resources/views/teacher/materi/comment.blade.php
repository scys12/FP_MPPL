@extends('layouts.app')

@section('content')
<div class="container mb-3 mt-3">
  <div class="row">
    <div class="col-md-12">
      <div class="card-body border-bottom">
        <h5 class="card-title font-weight-bold text-dark" style="font-size: 30px">{{$question->question}}</h5>
        <h6 class="card-subtitle font-weight-bold mb-2 text-muted">ditanyakan oleh {{$question->user->username}} pada {{$question->created_at}}</h6>
      </div>
    </div>
    @foreach ($question->comments as $comment)
      <div class="col-md-12 mt-3">
        <div class="card-body border-bottom">
          <h5 class="card-title">
            {!! $comment->comment !!}
          </h5>
          <h6 class="card-subtitle mb-2 text-muted">dijawab oleh {{$comment->user->username}} pada {{$comment->created_at}}</h6>
        </div>
      </div>
    @endforeach
    <div class="col-md-12 mt-3">
      <div class="card-body border-bottom">
        <form action="{{route('teacher.soal_materi.comment.insert', ['id' => $id, 'question_id' => $question->id])}}" method="post">
          @csrf
          <h5 class="card-title">Jawaban Anda</h5>
          <textarea id="editor" name="comment">
            <p>Masukkan jawaban</p>
          </textarea>
          <div class="mt-3">
            <button type="submit" class="btn btn-info">Post Jawaban</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );
</script>
@endsection