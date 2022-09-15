@extends('layouts.auth')

@section('content')
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                        <div class="text-right">
                                            <h1 class="h4 text-gray-900 mb-4">{{__('auth.welcome_back')}} !</h1>
                                        </div>
                                    @else
                                        <div class="text-left">
                                            <h1 class="h4 text-gray-900 mb-4">{{__('auth.welcome_back')}} !</h1>
                                        </div>
                                    @endif

                                    <form class="user" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control " name="username" value="{{ old('username') }}" placeholder="{{__('auth.username')}}">
                                            @error('username')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{__('auth.password_entered')}}">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input class="custom-control-input" type="checkbox" name="remember" id="customCheck" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="custom-control-label pr-4" for="customCheck">{{ __('auth.remember_me') }}</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary  btn-block">
                                                {{ __('auth.login') }}
                                            </button>
                                        </div>
                                    </form>
                                    <hr>
                                    <div class="row">
                                        <div class="col-6 text">
                                            @if (Route::has('password.request'))
                                                <a class="small"  href="{{ route('password.request') }}">
                                                    {{ __('auth.forget_password') }}
                                                </a>
                                            @endif
                                        </div>
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
