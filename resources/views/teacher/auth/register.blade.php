@extends('layouts.app')

@section('content')

<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header font-weight-bold bg-warning text-white shadow-sm">{{ __('Daftar Sebagai Pengajar') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('teacher.register') }}">
                        @csrf

                        <div class="d-flex justify-content-center">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="name" class="text-md-right font-weight-bold">{{ __('Name') }}</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror                                
                                </div>

                                <div class="form-group">
                                    <label for="username" class="text-md-right font-weight-bold">{{ __('Username') }}</label>
                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror                                
                                </div>
        
                                <div class="form-group">
                                    <label for="email" class="text-md-right font-weight-bold">{{ __('Alamat E-Mail') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror                                
                                </div>
        
                                <div class="form-group">
                                    <label for="text" class="text-md-right font-weight-bold">{{ __('Nomor Telepon') }}</label>
                                    <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number">
                                        @error('phone_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror                                
                                </div>
        
                                <div class="form-group">
                                    <label for="password" class="text-md-right font-weight-bold">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror                                
                                </div>
        
                                <div class="form-group">
                                    <label for="password-confirm" class="text-md-right font-weight-bold">{{ __('Konfirmasi Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
        
                                <div class="form-group">
                                    <div class="" style="display: flex;align-items: baseline;">
                                        <button type="submit" class="btn btn-lg btn-warning text-white font-weight-bold mr-3">{{('Daftar Sebagai Pengajar') }}
                                        </button>
                                        <div>
                                            <p>
                                                <strong>atau <a href="{{route('register')}}">Daftar Sebagai Murid</a></strong>
                                            </p>                                    
                                        </div>
                                    </div>                            
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection