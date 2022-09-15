@extends('layouts.app')

@section('content')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                <div class="col-lg-12 text-@if(LaravelLocalization::getCurrentLocale() == 'ar')right @endif">
                    <h1 class="h2 text-uppercase mb-0">{{ __('auth.reset_password') }}</h1>
                </div>

            </div>
        </div>
    </section>
    <!--Custom design -->
    <section class="container py-5">
        <div class="row">
            <div class="col-6 offset-3">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">


                    <div class="col-12  mb-3 text-@if(LaravelLocalization::getCurrentLocale() == 'ar')right @endif">
                        <div class="form-group">
                            <label for="email" class="text-small text-uppercase">{{ __('auth.email_address') }}</label>
                            <input type="email" class="form-control form-control-lg" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="">
                            @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="col-12  mb-3 text-@if(LaravelLocalization::getCurrentLocale() == 'ar')right @endif">
                        <div class="form-group">
                            <label for="password" class="text-small text-uppercase">{{__('auth.password_entered')}}</label>
                            <input type="password" class="form-control form-control-lg" name="password" placeholder="">
                            @error('password')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="col-12  mb-3 text-@if(LaravelLocalization::getCurrentLocale() == 'ar')right @endif">
                        <div class="form-group">
                            <label for="password_confirmation" class="text-small text-uppercase">{{ __('auth.confirm_password') }}</label>
                            <input type="password" class="form-control form-control-lg" name="password_confirmation"  placeholder="">
                        </div>
                    </div>
                    <div class="col-12 text-@if(LaravelLocalization::getCurrentLocale() == 'ar')right @endif">
                        <div class="form-group">
                            <button type="submit" class="btn btn-dark">
                                {{ __('auth.reset_password') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </section>
@endsection
