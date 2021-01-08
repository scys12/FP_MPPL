@extends('layouts.app')

@section('content')
<div class="bg-light pt-6 pb-3">
  <div class="container">
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
            <div style="display: flex;flex-direction:row;justify-content: space-between; align-items:baseline">
              <h6 class="card-subtitle mb-2 text-muted">dijawab oleh {{$comment->user->username}} pada {{$comment->created_at}}</h6>
              @if ($comment->user_ids == Auth::user()->id)
                <div class="icon d-flex" style="justify-content: center;align-items:end">
                  <span data-toggle="modal" data-target="#delete-modal" data-id="{{$comment->id}}" style="font-size: 25px; color:#DC3545;cursor: pointer;" class="icon icon-delete btn-del"></span>
                  <a href="{{route('teacher.video_materi.comment.update', ['id' => $id, 'question_id' => $question->id, 'comment_id' => $comment->id])}}">
                    <span style="font-size: 25px; color:#ffc107;cursor: pointer" class="icon icon-edit">
                    </span></a>                              
                </div>
              @endif
            </div>
          </div>
        </div>
      @endforeach
      <div class="col-md-12 mt-3">
        <div class="card-body border-bottom">
          <form action="{{route('teacher.video_materi.comment.insert', ['id' => $id, 'question_id' => $question->id])}}" method="post">
            @csrf
            <h5 class="card-title">Jawaban Anda</h5>
            <textarea id="editor" name="comment" placeholder="Masukkan jawaban"></textarea>
            <div class="mt-3">
              <button type="submit" class="btn btn-info">Post Jawaban</button>
            </div>
          </form>
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
                <form action="{{route('teacher.video_materi.comment.delete', ['id' => $id, 'question_id' => $question->id])}}" method="post" id="modal-form">
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
    const btnDelete  = document.querySelectorAll('.btn-del');
    btnDelete.forEach( btn => {
        btn.addEventListener('click', (e) =>{
            const itemID = e.currentTarget.getAttribute('data-id');
            document.querySelector('#idDel').value = itemID;
        })
    });
</script>
@endsection