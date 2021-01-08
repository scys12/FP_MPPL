@extends('layouts.app')

@section('content')
<div class="bg-light pt-6 pb-3">
  <div class="container">
    <div class="row justify-content-center">
      <div class="d-flex col-md-12 justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Kelas Private</h1>
      </div>
      <div class="col-md-8 shadow mb-3 p-5">
        <form action="{{route('teacher.class.insert')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Nama Kelas</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" required name="name" value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Deskripsi Kelas</label>
                <textarea id="editor" required name="description" class="form-control @error('name') is-invalid @enderror">
                  {{old('description')}}
                </textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
              <label for="hari_pertama">Hari Private Pertama</label>
              <select class="form-control" id="hari_pertama" name="hari_pertama" required>
                <option disabled selected value>Pilih Hari</option>
                <option value="1">Senin</option>
                <option value="2">Selasa</option>
                <option value="3">Rabu</option>
                <option value="4">Kamis</option>
                <option value="5">Jumat</option>
                <option value="6">Sabtu</option>
                <option value="7">Minggu</option>
              </select>
              @error('hari_pertama')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="hari_kedua">Hari Private Kedua</label>
              <select class="form-control" id="hari_kedua" name="hari_kedua" required>
                <option disabled selected value>Pilih Hari</option>
              </select>
              @error('hari_kedua')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <button type="submit" class="btn btn-secondary m-3">Tambah Kelas</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  const editor = ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );
    document.querySelector('#hari_pertama').addEventListener('change', (e)=> {
      let newOption = '<option disabled selected value>Pilih Hari</option> ';      
      const senin = '<option value="1">Senin</option> ';
      const selasa = '<option value="2">Selasa</option> ';
      const rabu = '<option value="3">Rabu</option> ';
      const kamis = '<option value="4">Kamis</option> ';
      const jumat = '<option value="5">Jumat</option> ';
      const sabtu = '<option value="6">Sabtu</option> ';
      const minggu = '<option value="7">Minggu</option> ';
      if(e.srcElement.value === '1' ){
        newOption += (selasa + rabu + kamis + jumat + sabtu + minggu);
      }
      if(e.srcElement.value === '2' ){
        newOption += (senin + rabu + kamis + jumat + sabtu + minggu);
      }
      if(e.srcElement.value === '3' ){
        newOption += (senin + selasa + kamis + jumat + sabtu + minggu);
      }
      if(e.srcElement.value === '4' ){
        newOption += (senin + selasa + rabu + jumat + sabtu + minggu);
      }
      if(e.srcElement.value === '5' ){
        newOption += (senin + selasa + rabu + kamis + sabtu + minggu);
      }
      if(e.srcElement.value === '6' ){
        newOption += (senin + selasa + rabu + kamis + jumat + minggu);
      }
      if(e.srcElement.value === '7' ){
        newOption += (senin + selasa + rabu + kamis + jumat + sabtu);
      }
      console.log(e.srcElement.value)
      const hari_kedua = document.querySelector('#hari_kedua');
      hari_kedua.innerHTML = newOption;
    })
</script>
@endsection