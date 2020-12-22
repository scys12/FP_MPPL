@extends('layouts.useradmin')

@section('content')
<div class="container mb-4 mt-4">
  <div class="row">
    <div class="d-flex col-md-12 justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Murid</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="#" class="btn btn-sm btn-dark">Tambah Murid </a>
        </div>
    </div>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead>
          <tr>
              <th>Name</th>
              <th>Email</th>
              <th>No. Telp</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>Tiger Nixon</td>
              <td>abcd@gmail.com</td>
              <td>+6282273710028</td>
              <td>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <a href="#" class="btn btn-sm btn-info">Lihat</a>
                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                </div>
              </td>
          </tr>
          <tr>
              <td>Tiger Nixon</td>
              <td>abcd@gmail.com</td>
              <td>+6282273710028</td>
              <td>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <a href="#" class="btn btn-sm btn-info">Lihat</a>
                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                </div>
              </td>
          </tr>
          <tr>
              <td>Tiger Nixon</td>
              <td>abcd@gmail.com</td>
              <td>+6282273710028</td>
              <td>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <a href="#" class="btn btn-sm btn-info">Lihat</a>
                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                </div>
              </td>
          </tr>
          <tr>
              <td>Tiger Nixon</td>
              <td>abcd@gmail.com</td>
              <td>+6282273710028</td>
              <td>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <a href="#" class="btn btn-sm btn-info">Lihat</a>
                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                </div>
              </td>
          </tr>
          <tr>
              <td>Tiger Nixon</td>
              <td>abcd@gmail.com</td>
              <td>+6282273710028</td>
              <td>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <a href="#" class="btn btn-sm btn-info">Lihat</a>
                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                </div>
              </td>
          </tr>
          <tr>
              <td>Tiger Nixon</td>
              <td>abcd@gmail.com</td>
              <td>+6282273710028</td>
              <td>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <a href="#" class="btn btn-sm btn-info">Lihat</a>
                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                </div>
              </td>
          </tr>
      </tbody>
    </table>
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
<script>
  $('#example').DataTable();
</script>
@endsection