@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">

                        {{-- <div class="text-center alert alert-danger">
                                {{ $errors->first() }}
                        </div> --}}
        
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Staff_ID') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" maxlength="4" class="form-control @error('name') is-invalid @enderror" name="staff_id" value="{{ old('staff_id') }}" required autocomplete="staff_id" autofocus>

                                @error('staff_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Phone_No') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" maxlength="10" class="form-control @error('name') is-invalid @enderror" name="phone_no" value="{{ old('phone_no') }}" required autocomplete="phone_no" autofocus>
    
                                    @error('phone_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4 mb-2">
                                <div class="g-recaptcha @error('g-recaptcha-response') is-invalid @enderror" data-sitekey="{{env('CAPTCHA_KEY')}}"></div>
                            </div>
                                @if($errors->has('g-recaptcha-response'))
                                    <div class="invalid-feedback col-md-6 offset-md-4 mb-2" style="display:block">
                                        <strong>{{$errors->first('g-recaptcha-response')}}</strong>
                                    </div>
                                @endif
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button class="btn btn-danger">
                                    <a class="text-white" href="/">{{ __('Back') }}</a>
                                </button>
                                <button type="submit" class="btn btn-success">
                                    {{ __('Register new employee') }}
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
