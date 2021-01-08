@extends('layouts.app')

@section('content')
<div class="bg-light pt-6 pb-3">
  <div class="container mt-3">
    <div class="d-flex col-md-12 justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3 class="font-weight-bold">Kelas Private Saya</h3>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{{route('teacher.class.insert')}}}" class="btn btn-sm btn-dark">Tambah Kelas Private</a>
        </div>
    </div>
    <div class="row">
      @foreach ($classes as $class)
        <div class="col-md-4 mt-3">
          <div class="card shadow-sm">
            <div class="d-flex justify-content-center p-3">
              <img src="{{asset('img/read.png')}}" style="width:100px;height:100px" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title">{{$class->name}} </h5>
              <div class="btn-toolbar mb-2 mb-md-0">
                  <div class="btn-group mr-2">
                      <a href="{{route('teacher.class.show', ['id' => $class->id])}}" class="btn btn-outline-danger btn-sm">Detail</a>
                      <a href="{{route('teacher.class.update', ['id' => $class->id])}}" class="btn btn-outline-danger btn-sm">Update</a>
                      <button href="#" data-toggle="modal" data-target="#delete-modal" data-id="{{$class->id}}" class=" btn-del btn btn-outline-danger btn-sm">Hapus</button>
                  </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    {{ $classes->links() }}
  </div>
</div>
<div class="modal fade" id="delete-modal" tabindex="-1" aria-labelledby="delete-modal-label" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header bg-danger">
              <h5 class="modal-title" style="display:flex; align-items:center;flex-direction:row" id="delete-modal-label">
                  <i class="fas fa-exclamation-triangle" style="color:var(--white)"></i>
                  <span class="ml-1" style="color:var(--white)">Delete Class</span>
              </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
              <div class="modal-body">
                  Are you sure you want to remove this class ?
              </div>
          <div class="modal-footer">
              <form action="{{route('teacher.class.delete')}}" method="post">
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