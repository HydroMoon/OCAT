@extends('layouts.admin')

@section('content')
<div class="row vh-100">
    <div class="col-md-4 m-auto">
        <div class="border shadow p-2" style="background: #f9f9f9;">
            <a href="/"><i class="fa fa-2x fa-arrow-left position-absolute float-left" style="color: #bb375f;" aria-hidden="true"></i></a>
            <img class=" m-2 mx-auto d-block" src="/apple-touch-icon.png" alt="">
            <hr class="mx-5">
            <p class="text-muted text-center">كلية أمدرمان للطيران والتكنولوجيا</p>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-group p-3">
                    <label class="ms-2" for="email">البريد الإلكتروني</label>
                    <input type="email" name="email" class="form-control mt-2 @error('email') is-invalid @enderror" required autocomplete="email" autofocus>
                    <label class="ms-2 mt-2" for="password">كلمة المرور</label>
                    <input type="password" name="" id="" class="form-control mt-2 @error('password') is-invalid @enderror" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback my-2" role="alert">
                        <strong>البيانات خاطئة!</strong>
                    </span>
                    @enderror
                    <hr class="mx-5">
                    <button class="btn btn-success mx-auto d-block">دخول</button>
                </div>
            </form>
        </div>
        {{-- <div class="card" style="background: #bb375f;">
                <div class="card-header">{{ __('Login') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">

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
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div> --}}
</div>
</div>
@endsection
