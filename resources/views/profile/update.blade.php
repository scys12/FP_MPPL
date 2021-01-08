@extends('layouts.app')

@section('content')
<div class="container pt-6 pb-3">
  <div class="row justify-content-center">
    <div class="col-md-6 shadow">
      <div class="p-3">
        <h3 class="font-weight-bold">Update Profile</h3>
        <hr>
      </div>
      <form action="{{route('profile.update')}}" method="POST" class="p-3">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="username" class="text-md-right font-weight-bold">{{ __('Username') }}</label>
            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username', Auth::user()->username) }}" required autocomplete="username" autofocus>
                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror                                
        </div>
        <div class="form-group">
            <label for="name" class="text-md-right font-weight-bold">{{ __('Name') }}</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', Auth::user()->name) }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror                                
        </div>
        <div class="form-group">
            <label for="email" class="text-md-right font-weight-bold">{{ __('Alamat E-Mail') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', Auth::user()->email) }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror                                
        </div>
        <div class="form-group">
            <label for="text" class="text-md-right font-weight-bold">{{ __('Nomor Telepon') }}</label>
            <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number', Auth::user()->phone_number) }}" required autocomplete="phone_number">
                @error('phone_number')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror                                
        </div>
        <div class="d-flex justify-content-center mt-3 mb-4">
          <button type="submit" class="btn btn-lg btn-secondary">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection