@extends('layouts.app')

@section('content')
<div class="container">
  <div class="mb-5">
    <h3>Pembayaran Paket Pembelajaran Primalangga</h3>
  </div>
  <div class="text-center mt-3 mb-3" style="text-transform: uppercase">
    <h5>Bayar Sebelum 21 November 2020 01:23 PM</h5>
    <h3 class="font-weight-bold" style="font-size: 30px">IDR 4.500.000</h3>
  </div>
  <div class="col-md-12">
    <div class="row justify-content-center">
      <div class="card">
        <div class="d-flex align-items-center p-3">
          <i class="fas fa-2x fa-university"></i>
          <h5 class="ml-3 font-weight-bold">Transfer Bank</h5>
        </div>
        <div>
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-4 mt-3 mb-3">
                <div style="cursor: pointer;" class="card p-3 justify-content-center d-flex align-items-center" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                  <img src="{{asset('img/bni.png')}}" class="card-img-top" style="width:  125px;height:50px" alt="...">
                </div>
              </div>
              <div class="col-md-4 mt-3 mb-3">
                <div style="cursor: pointer;" class="card p-3 justify-content-center d-flex align-items-center"  data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                  <img src="{{asset('img/mandiri.png')}}" class="card-img-top" style="width:  125px;height:50px" alt="...">
                </div>
              </div>
              <div class="col-md-4 mt-3 mb-3">
                <div style="cursor: pointer;" class="card p-3 justify-content-center d-flex align-items-center"  data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                  <img src="{{asset('img/bca.png')}}" class="card-img-top" style="width:  125px;height:50px" alt="...">
                </div>
              </div>              
            </div>
            <div class="collapse" id="collapseExample">
              <div class="card card-body">
                <div class="mb-3">
                  <h6>Virtual Account</h6>
                  <h4 class="font-weight-bold">8808221107228639</h4>
                </div>
                <div class="mb-3">
                  <h6>Nama Virtual Account</h6>
                  <h4 class="font-weight-bold">PRIMALANGGA</h4>
                </div>
                <div class="mb-3">
                  <h6>Nominal</h6>
                  <h4 class="font-weight-bold">IDR 200.000</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection