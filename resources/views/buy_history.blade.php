@extends('layouts.app')
@section('content')
  <div class="pt-8 bg-light pb-5">
    <div class="container">
      <div class="d-flex mb-5" style="flex-direction:column">
        <h5>Histori Pembayaran Belajar Mandirit</h5>
        <table class="table table-hover table-light">
          <thead class="table-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Harga</th>
              <th scope="col">Status</th>
              <th scope="col">Batas</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($transactionsBelajar as $item)
              <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{date_format($item->date_started->toDateTime(), 'd-m-Y')}}</td>
                <td>{{$item->price}}</td>
                <td>
                  <span style="padding:10px; border-radius:5px;color:white"
                    class="@if ($item->status == 'waiting') bg-danger @else bg-primary @endif">
                    @if ($item->status == 'waiting')
                        Belum dibayar
                    @else
                      Sudah dibayar
                    @endif
                  </span>
                </td>
                <td>{{date_format($item->date_end->toDateTime(), 'd-m-Y H:m')}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="d-flex mb-5" style="flex-direction:column">
        <h5>Histori Pembayaran Kelas Private</h5>
        <table class="table table-hover table-light">
          <thead class="table-secondary">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Harga</th>
              <th scope="col">Status</th>
              <th scope="col">Batas</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($transactionsPrivate as $item)
              <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{date_format($item->date_started->toDateTime(), 'd-m-Y')}}</td>
                <td>{{$item->price}}</td>
                <td>
                  <span style="padding:10px; border-radius:5px;color:white"
                    class="@if ($item->status == 'waiting') bg-danger @else bg-primary @endif">
                    @if ($item->status == 'waiting')
                        Belum dibayar
                    @else
                      Sudah dibayar
                    @endif
                  </span>
                </td>
                <td>{{date_format($item->date_end->toDateTime(), 'd-m-Y H:m')}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection