@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Attendance</div>

                {{-- ////////////////////////////////////////////////////////////// --}}
                <div class="m-3">
                        <form method="POST" action="">
                                @csrf

                                <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Outlet') }}</label>
                            
                                        <div class="col-md-6">
                                            <input id="outlet" placeholder="KLIA" disabled type="text" class="form-control @error('outlet') is-invalid @enderror" name="outlet" value="{{ old('outlet') }}" required autocomplete="outlet" autofocus>
                            
                                            @error('outlet')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                        
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
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ID') }}</label>
                            
                                        <div class="col-md-6">
                                            <input id="id" type="text" class="form-control @error('id') is-invalid @enderror" name="id" value="{{ old('id') }}" required autocomplete="id" autofocus>
                            
                                            @error('id')
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
                        
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">

                                        <button type="submit" onclick="checkin()" class="btn btn-info mr-3 text-white">
                                            {{ __('Punch In') }}
                                        </button>
                                        <button type="submit" class="btn btn-info text-white">
                                                {{ __('Punch Out') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                                <div class="text-center m-3">
                                        <a class= "text-white btn btn-danger" href="/onlineleave">Leave Application</a> 
                                </div>

                </div>

                {{-- /////////////////////////////////////// --}}   
        </div>
    </div>
</div>
</div>
<script>
        function checkin(){
            alert("You are punch in :)");
        }
        </script>
        
@endsection
