@extends('layouts.app')

@section('content')
<div class="bg-light pt-6 pb-3">
  <div class="container">
    <form action="{{route('soal_materi.question.update', ['id' => $id, 'question_id' => $question->id])}}" method="post">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="" class="font-weight-bold">Edit Pertanyaan</label>
        <textarea name="question" id="question" class="form-control" cols="30" rows="10">{{$question->question}}</textarea>
        @error('question')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <button class="btn btn-primary btn-sm">Update</button>
    </form>
  </div>
</div>
@endsection