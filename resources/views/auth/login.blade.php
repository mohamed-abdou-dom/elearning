@extends('layouts.app')

@section('content')

<div class="auth page-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 left-side">
                <h3 class="main-title">let's start, to grow up your skills</h3>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password"/>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    {{-- <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                        <label class="form-check-label" for="remember">Remeber Me</label>
                    </div> --}}
                    <button type="submit" class="main-btn mr-5">
                        Login
                    </button>
                    <span>OR <a class="ml-3 info" href="{{ url('/register') }}">Join Our Community</a> </span>
            
                </form>
                {{-- <br> --}}
            </div>
            <div class="col-md-6 right-side">
                <div class="image">
                <img
                    src="images/auth/login.png"
                    width="100%"
                    height="100%"
                    alt=""
                    srcset=""
                />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
