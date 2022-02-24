@extends('layout.auth')
@section('title', 'Web')

{{-- @yield('container') --}}

@section('container')
<main class="main-content">
    <div class="login-register-area section-space-y-axis-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="login-form">
                            <h4 class="login-title">Sign-Up</h4>
                            <div class="row">
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Name</label>
        
                                    <div class="col-md-12">

                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required
   oninvalid="setCustomValidity('Nama harus diisi')" autofocus>
        
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>
        
                                    <div class="col-md-12">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required
   oninvalid="setCustomValidity('E-mail harus diisi')">
        
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
        
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password</label>
        
                                    <div class="col-md-12">
                                        <input id="password" type="password" class="form-control" name="password" required
   oninvalid="setCustomValidity('Password harus diisi')">
        
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
        
                                <div class="form-group">
                                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
        
                                    <div class="col-md-12">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
   oninvalid="setCustomValidity('Password harus diisi')" >
                                    </div>
                                </div>
        
                                <div class="form-group">
                                    <div class="col-md-12 col-md-offset-4">
                                        <button type="submit" class="btn btn-pronia-primary">
                                            Sign-Up
                                        </button>
                                        <a class="btn btn-link" href="{{ route('login') }}">
                                            Sudah mempunyai akun?
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>
</main>

@endsection
