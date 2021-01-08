@extends('layouts.app')

@section('content')
<div class="bg-light pt-6 pb-3">
  <div class="container d-flex justify-content-center" style="flex-direction: column; align-items: center">
    <div class="col-md-12 mb-3">
      <div class="card shadow-sm">
        <div class="d-flex justify-content-center p-3">
          <img src="{{asset('img/read.png')}}" class="card-img-top" style="width: 150px;height:150px" alt="...">
        </div>
        <div class="card-body d-flex">
          <div style="flex: 2">
            <h5 class="card-title font-weight-bold">Kelas {{$class->name}}</h5>
            <h6 class="font-weight-bold">Jadwal Tentor</h6>
            <ul>
              @if ($class->hari_pertama == 1)
                <li>Senin, 16.30-18.30</li>
              @elseif($class->hari_pertama == 2)
                <li>Selasa, 16.30-18.30</li>
              @elseif($class->hari_pertama == 3)
                <li>Rabu, 16.30-18.30</li>
              @elseif($class->hari_pertama == 4)
                <li>Kamis, 16.30-18.30</li>
              @elseif($class->hari_pertama == 5)
                <li>Jumat, 16.30-18.30</li>
              @elseif($class->hari_pertama == 6)
                <li>Sabtu, 16.30-18.30</li>
              @elseif($class->hari_pertama == 7)
                <li>Minggu, 16.30-18.30</li>
              @endif
              @if ($class->hari_kedua == 1)
                <li>Senin, 16.30-18.30</li>
              @elseif($class->hari_kedua == 2)
                <li>Selasa, 16.30-18.30</li>
              @elseif($class->hari_kedua == 3)
                <li>Rabu, 16.30-18.30</li>
              @elseif($class->hari_kedua == 4)
                <li>Kamis, 16.30-18.30</li>
              @elseif($class->hari_kedua == 5)
                <li>Jumat, 16.30-18.30</li>
              @elseif($class->hari_kedua == 6)
                <li>Sabtu, 16.30-18.30</li>
              @elseif($class->hari_kedua == 7)
                <li>Minggu, 16.30-18.30</li>
              @endif
            </ul>
            <h6 class="font-weight-bold">Pendidikan Terakhir</h6>
            <p>Teknik Elektro UNJ</p>
          </div>
          <div style="flex: 1">
            <div style="width: 2px;height:100%; background:#ddd"></div>
          </div>
          <div style="flex: 1">
            <h6 class="font-weight-bold">Deskripsi</h6>
            {!! $class->description !!}  
          </div>
        </div>
      </div>
    </div>
    @if(count($userClass) > 0)
      <div class="col-md-12">        
        <div class="card shadow-sm">
          <div class="card-body">
            <h4>List Peserta</h4>
            <table class="table table-hover table-light">
              <thead class="table-dark">
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nama Murid</th>
                  <th scope="col">Nomor Telepon</th>
                  <th scope="col">Link Zoom</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($userClass as $user)
                  <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->user->name}}</td>
                    <td>{{$user->user->phone_number}}</td>
                    <td>
                      @if (isset($user->zoom))
                        <a href="{{url('http://'.$user->zoom)}}">Link Zoom</a>
                      @else
                        Belum ada Link Zoom
                      @endif
                    </td>
                    <td>
                      <a href data-id= "{{$user->id}}" class="btn-zoom btn btn-info">Upload Link Zoom</a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>              
          </div>
        </div>
        <hr>      
      </div>
      <div class="col-md-12" id="form-zoom" style="display: none">
        <div class="card">
          <div class="card-body">
            <form action="{{route('teacher.class.zoom', ['id' => $class->id ])}}" method="post">
              @csrf
              <input type="hidden" id="user_private_id" name="user_private_id">
              <div class="form-group">
                <h6 class="font-weight-bold">
                  Link Zoom
                </h6>
                <input type="text" class="form-control @error('zoom') is-invalid @enderror" id="zoom" required name="zoom" value="{{ old('zoom') }}" required>
              </div>
              <button class="btn btn-primary" type="submit">Upload Link Zoom</button>
            </form>
          </div>
        </div>
      </div>
    @endif
  </div>
</div>
<script>
  const btnZoom = document.querySelectorAll('.btn-zoom');  
  btnZoom.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault()
      const formZoom = document.getElementById('form-zoom');
      if (formZoom.style.display == 'none') {
        formZoom.style.display = 'block'
        const dataId = e.srcElement.getAttribute('data-id');
        document.getElementById('user_private_id').value = dataId
      }else {
        formZoom.style.display = 'none'
        document.getElementById('user_private_id').value = ''
      }
    })
  })
</script>
@endsection