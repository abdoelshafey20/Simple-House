 @extends('layouts.app')

@section('content')

@include('temp.navbar')

<header class="row tm-welcome-section">
    <h2 class="col-12 text-center tm-section-title">Login Page</h2>
    <p class="col-12 text-center">You may use image has a parallax effect. Total 3 HTML pages included in this template.</p>
</header>

 
<div class="container form-group tm-container-inner-2 tm-contact-section m-auto">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card col-md-12">
             

                <div class="card-body col-md-12 ">
                               
                    <form method="post" class=" col-md-12" action={{ route('login') }} role="form">
                        @csrf

                        <div class="form-group row ">
                            <label for="email" class="col-md-12 ">{{ __('E-Mail') }}</label>

                            <div class="col-md-12 form-control">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group  col-md-12">
                            <label for="password" class="col-md-12 ">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                     <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-md-12 ">
                            <div class="col-md-10 offset-md-4">
                                <div class="form-check col-md-12">
                                    <input class="form-check-input col-md-10" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label col-md-10" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-md-12 mx-auto mb-2">
                            <div class="col-md-12 ">
                                <button  type="submit" class="btn btn-primary form-control" >
                                    login
                                </button>
                              

                            
                            </div>
                              
                            <a href="{{route('register')}}" class="btn btn-link">
                                Register
                             </a>
                        </div>
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                    </form>

               





               
                </div> 



                
            </div>
        </div>
    </div>
</div> 
 @endsection 




{{-- 
@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

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
            </div>
        </div>
    </div>
</div>




@endsection --}} 
