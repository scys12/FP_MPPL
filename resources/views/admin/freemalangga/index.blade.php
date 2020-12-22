@extends('layouts.useradmin')

@section('content')
<div class="container mb-4 mt-4">
  <div class="row">
    <div class="d-flex col-md-12 justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Freemalangga</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="#" class="btn btn-sm btn-dark">Tambah Freemalangga</a>
        </div>
    </div>
    <div class="col-md-4">
      <div class="card mt-3">
        <div class="card-body card-materi-admin">
          <i data-toggle="modal" data-target="#delete-modal" data-type="kehadiran" data-id="" class="close-btn btn-del fas fa-times-circle"></i>
          <a href="#" style="font-size:18px;" class="card-title">Cara pengklasifikasi taksonomi</a>
          <h6 class="card-subtitle mb-2 mt-2 text-muted">Biologi SMA</h6>
          <p class="card-text">Some description here</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mt-3">
        <div class="card-body card-materi-admin">
          <i data-toggle="modal" data-target="#delete-modal" data-type="kehadiran" data-id="" class="close-btn btn-del fas fa-times-circle"></i>
          <a href="#" style="font-size:18px;" class="card-title">Cara pengklasifikasi taksonomi</a>
          <h6 class="card-subtitle mb-2 mt-2 text-muted">Biologi SMA</h6>
          <p class="card-text">Some description here</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mt-3">
        <div class="card-body card-materi-admin">
          <i data-toggle="modal" data-target="#delete-modal" data-type="kehadiran" data-id="" class="close-btn btn-del fas fa-times-circle"></i>
          <a href="#" style="font-size:18px;" class="card-title">Cara pengklasifikasi taksonomi</a>
          <h6 class="card-subtitle mb-2 mt-2 text-muted">Biologi SMA</h6>
          <p class="card-text">Some description here</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mt-3">
        <div class="card-body card-materi-admin">
          <i data-toggle="modal" data-target="#delete-modal" data-type="kehadiran" data-id="" class="close-btn btn-del fas fa-times-circle"></i>
          <a href="#" style="font-size:18px;" class="card-title">Cara pengklasifikasi taksonomi</a>
          <h6 class="card-subtitle mb-2 mt-2 text-muted">Biologi SMA</h6>
          <p class="card-text">Some description here</p>
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
                  <span class="ml-1" style="color:var(--white)">Hapus Freemalangga</span>
              </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
              <div class="modal-body">
                  Apakah kamu yakin ingin menghapus ini <span class="type-data"></span> ?
              </div>
          <div class="modal-footer">
              <form action="" method="post" id="modal-form">
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
@endsection