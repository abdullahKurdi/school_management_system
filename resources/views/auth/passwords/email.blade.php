@extends('layouts.app')

@section('content')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center text-@if(LaravelLocalization::getCurrentLocale() == 'ar')right @endif">
                <div class="col-lg-12">
                    <h1 class="h2 text-uppercase mb-0">{{ __('auth.reset_password') }}</h1>
                </div>
            </div>
        </div>
    </section>

    <!--Custom design -->
    <section class="container">
        <div class="row py-5">
            <div class="col-9 offset-3 text-@if(LaravelLocalization::getCurrentLocale() == 'ar')right @endif">
                @if (session('status'))
                    <div class="alert alert-success col-9" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="col-9 text-@if(LaravelLocalization::getCurrentLocale() == 'ar')right @endif">
                            <div class="form-group">
                                <label for="email" class="text-small text-uppercase">{{ __('auth.email_address') }}</label>
                                <input type="email" class="form-control text-@if(LaravelLocalization::getCurrentLocale() == 'ar')right @endif" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >
                                @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('auth.send_password_reset_link') }}
                                </button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
        </div>
    </section>
@endsection
