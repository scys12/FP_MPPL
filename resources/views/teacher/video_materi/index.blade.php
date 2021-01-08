@extends('layouts.app')

@section('content')
<div class="bg-light pt-6 pb-3">
  <div class="container">
    <div class="row">
        <div class="d-flex col-md-12 justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Video Materi</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <a href="{{route('teacher.video_materi.insert')}}" class="btn btn-sm btn-dark">Tambah Video Materi</a>
            </div>
        </div>
        @foreach ($video_materis as $video)
          <div class="col-md-4">
            <div class="card mt-3 shadow">
              <div class="d-flex justify-content-center">
                <img src="{{ asset('img/presentation.png')}}" class="card-img-top" style="width: 300px; object-fit: contain; height:300px;" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title font-weight-bold">{{$video->name}}</h5>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <a href="{{route('teacher.video_materi.show', ['id' => $video->id])}}" class="btn btn-sm btn-outline-danger">Lihat</a>
                        <a href="{{route('teacher.video_materi.update', ['id' => $video->id])}}" class="btn btn-sm btn-outline-warning">Update</a>
                        <button href="#" data-toggle="modal" data-target="#delete-modal" class=" btn-del btn btn-outline-danger btn-sm" data-id="{{$video->id}}">Hapus</button>
                    </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
    </div>
    {{$video_materis->links()}}
  </div>
</div>
<div class="modal fade" id="delete-modal" tabindex="-1" aria-labelledby="delete-modal-label" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header bg-danger">
              <h5 class="modal-title" style="display:flex; align-items:center;flex-direction:row" id="delete-modal-label">
                  <i class="fas fa-exclamation-triangle" style="color:var(--white)"></i>
                  <span class="ml-1" style="color:var(--white)">Hapus Video Materi</span>
              </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
              <div class="modal-body">
                  Apakah kamu yakin ingin menghapus video materi ini ?
              </div>
          <div class="modal-footer">
              <form action="{{route('teacher.video_materi.delete')}}" method="post">
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