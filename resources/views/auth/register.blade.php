@extends('layouts.base')

@section('title', 'Register')

@section('content')
    <div class="container-xl min-vh-90 vh-90">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        <p class="text-center fs-3 my-2">Pendaftaran Akun</p>
                    </div>

                    <div class="card-body my-5">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-4">
                                <label for="name"
                                    class="col-md-3 col-form-label text-md-end">{{ __('Nama Pemilik') }}</label>

                                <div class="col-md-8">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="email"
                                    class="col-md-3 col-form-label text-md-end">{{ __('Alamat Email') }}</label>

                                <div class="col-md-8">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="password"
                                    class="col-md-3 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-8">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="password-confirm"
                                    class="col-md-3 col-form-label text-md-end">{{ __('Konfirmasi Password') }}</label>

                                <div class="col-md-8">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-9 offset-md-3">
                                    <button type="submit" class="btn btn-coffee">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
