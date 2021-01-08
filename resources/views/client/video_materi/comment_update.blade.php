@extends('layouts.app')

@section('content')
<div class="bg-light pt-6 pb-3">
  <div class="container">
    <form action="{{route('video_materi.comment.update', ['id' => $id, 'question_id' => $question_id, 'comment_id' => $comment->id])}}" method="post">
      @csrf
      @method('PUT')
      <div class="form-group">
        <h5 class="card-title">Update Comment</h5>
        <textarea id="editor" name="comment" placeholder="Masukkan Jawabanmu">{{$comment->comment}}</textarea>
      </div>
      <button class="btn btn-primary btn-sm">Update</button>
    </form>
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