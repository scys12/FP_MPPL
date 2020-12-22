@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="d-flex col-md-12 justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Tambah Soal Materi</h1>      
    </div>
    <div class="col-md-10 shadow mb-3 p-5">
      <form action="{{route('teacher.materi.insert')}}" method="post">
          @csrf
          <div class="form-group">
              <label for="name">Nama Materi</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" required name="name" value="{{ old('name') }}" required>
              @error('name')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
          </div>
          <div class="form-group">
              <label for="description">Deskripsi Materi</label>
              <textarea name="description" id="description" class="form-control" cols="30" rows="10">
                {{ old('description') }}
              </textarea>
              @error('description')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
          </div>
          <div class="col-md-12">
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pertanyaan1">Pertanyaan 1</label>
                        <textarea class="form-control" name="pertanyaan1" id="pertanyaan1" required>{{ old('pertanyaan1') }}</textarea>
                        @error('pertanyaan1')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>          
                    <div class="form-group">
                        <label for="pertanyaan2">Pertanyaan 2</label>
                        <textarea class="form-control" name="pertanyaan2" id="pertanyaan2" required>{{ old('pertanyaan2') }}</textarea>
                        @error('pertanyaan2')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>          
                    <div class="form-group">
                        <label for="pertanyaan3">Pertanyaan 3</label>
                        <textarea class="form-control" name="pertanyaan3" id="pertanyaan3" required>{{ old('pertanyaan3') }}</textarea>
                        @error('pertanyaan3')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>          
                    <div class="form-group">
                        <label for="pertanyaan4">Pertanyaan 4</label>
                        <textarea class="form-control" name="pertanyaan4" id="pertanyaan4" required>{{ old('pertanyaan4') }}</textarea>
                        @error('pertanyaan4')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>          
                    <div class="form-group">
                        <label for="pertanyaan5">Pertanyaan 5</label>
                        <textarea class="form-control" name="pertanyaan5" id="pertanyaan5" required>{{ old('pertanyaan5') }}</textarea>
                        @error('pertanyaan5')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>          
                    <div class="form-group">
                        <label for="pertanyaan6">Pertanyaan 6</label>
                        <textarea class="form-control" name="pertanyaan6" id="pertanyaan6" required>{{ old('pertanyaan6') }}</textarea>
                        @error('pertanyaan6')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>          
                    <div class="form-group">
                        <label for="pertanyaan7">Pertanyaan 7</label>
                        <textarea class="form-control" name="pertanyaan7" id="pertanyaan7" required>{{ old('pertanyaan7') }}</textarea>
                        @error('pertanyaan7')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>          
                    <div class="form-group">
                        <label for="pertanyaan8">Pertanyaan 8</label>
                        <textarea class="form-control" name="pertanyaan8" id="pertanyaan8" required>{{ old('pertanyaan8') }}</textarea>
                        @error('pertanyaan8')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>          
                    <div class="form-group">
                        <label for="pertanyaan9">Pertanyaan 9</label>
                        <textarea class="form-control" name="pertanyaan9" id="pertanyaan9" required>{{ old('pertanyaan9') }}</textarea>
                        @error('pertanyaan9')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>          
                    <div class="form-group">
                        <label for="pertanyaan10">Pertanyaan 10</label>
                        <textarea class="form-control" name="pertanyaan10" id="pertanyaan10" required>{{ old('pertanyaan10') }}</textarea>
                        @error('pertanyaan10')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="jawaban1">Jawaban 1</label>
                        <textarea class="form-control" name="jawaban1" id="jawaban1" required>{{ old('jawaban1') }}</textarea>
                        @error('jawaban1')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="jawaban2">Jawaban 2</label>
                        <textarea class="form-control" name="jawaban2" id="jawaban2" required>{{ old('jawaban2') }}</textarea>
                        @error('jawaban2')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="jawaban3">Jawaban 3</label>
                        <textarea class="form-control" name="jawaban3" id="jawaban3" required>{{ old('jawaban3') }}</textarea>
                        @error('jawaban3')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="jawaban4">Jawaban 4</label>
                        <textarea class="form-control" name="jawaban4" id="jawaban4" required>{{ old('jawaban4') }}</textarea>
                        @error('jawaban4')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="jawaban5">Jawaban 5</label>
                        <textarea class="form-control" name="jawaban5" id="jawaban5" required>{{ old('jawaban5') }}</textarea>
                        @error('jawaban5')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="jawaban6">Jawaban 6</label>
                        <textarea class="form-control" name="jawaban6" id="jawaban6" required>{{ old('jawaban6') }}</textarea>
                        @error('jawaban6')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                          <label for="jawaban7">Jawaban 7</label>
                          <textarea class="form-control" name="jawaban7" id="jawaban7" required>{{ old('jawaban7') }}</textarea>
                          @error('jawaban7')
                              <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="form-group">
                          <label for="jawaban8">Jawaban 8</label>
                          <textarea class="form-control" name="jawaban8" id="jawaban8" required>{{ old('jawaban8') }}</textarea>
                          @error('jawaban8')
                              <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="form-group">
                          <label for="jawaban9">Jawaban 9</label>
                          <textarea class="form-control" name="jawaban9" id="jawaban9" required>{{ old('jawaban9') }}</textarea>
                          @error('jawaban9')
                              <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="form-group">
                        <label for="jawaban10">Jawaban 10</label>
                        <textarea class="form-control" name="jawaban10" id="jawaban10" required>{{ old('jawaban10') }}</textarea>
                        @error('jawaban10')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>          
                  </div>
              </div>
          </div>
          <button type="submit" class="btn btn-secondary m-3">Tambah Soal Materi</button>
      </form>
    </div>
  </div>
</div>
<script>
    const editor = ClassicEditor
    .create( document.querySelector( '#description' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );
</script>
@endsection