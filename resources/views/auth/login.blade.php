@extends('auth.layouts')

@section('title')
    {{lang_name('Login')}}
@endsection

@section('content')


    <p class="login-box-msg">{{lang_name('Sign_in_to_start_your_session')}}</p>

    @includeIf("layouts.msg")
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="input-group mb-3">
            <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                   type="text" id="email" value="{{ old('email') }}" name="email"
                   placeholder="{{lang_name('E_mail')}}">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
        </div>
        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
        @endif
        <div class="input-group mb-3">
            <input class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                   type="password" name="password" placeholder="{{lang_name('Password')}}">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>
        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
        @endif
        <div class="row">
            <div class="col-8">
                <div class="icheck-primary">
                    <input type="checkbox" id="remember">
                    <label for="remember">
                        {{lang_name('Remember_Me')}}
                    </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">{{lang_name('Login')}}</button>
            </div>
            <!-- /.col -->
        </div>
    </form>

    <p class="mb-1">
        <a href="{{ route('password.request') }}">{{lang_name('I_forgot_my_password')}}</a>
    </p>


@endsection
