@extends('layout.app')
@section('title', 'Login')
@section('content')
<div class="login-frontend pt-5">
<div class="col-6 pt-5 text-uppercase">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group row">
            <div class="col-4"></div>
            <div class="col-8 text-secondary">
            <h1 class="text-nowrap">login first<br>
            and happy <span class="header-heading-color-main">shopping</span></h1 class="text-nowrap">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right"></label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="USERNAME" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right"></label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="PASSWORD">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label text-secondary" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row mb-0">
        <div class="col-4"></div>
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-main px-5 text-uppercase">
                    {{ __('Login') }}
                </button>
            </div>
        </div>
    </form>
</div>
</div>
@endsection
