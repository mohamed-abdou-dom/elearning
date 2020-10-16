@extends('layouts.app')

@section('content')

<div class="auth page-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="main-title text-capitalize">Join Our Community</h3>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="User Name"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email"/>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password"/>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password Confirmation" name="password_confirmation" required autocomplete="new-password"/>
                        </div>
                        <button type="submit" class="main-btn mr-5">
                Register
              </button>
              <span>OR <a class="ml-3 info" href="{{ url('/login') }}">Login</a> </span>
            
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="image">
                        <img src="images/auth/register.png" width="80%" height="80%" alt="" srcset="" />
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
