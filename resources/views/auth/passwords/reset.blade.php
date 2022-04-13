@extends('auth.layouts')

@section('title')
    {{lang_name('Reset')}}
@endsection

@section('content')


    <p class="login-box-msg">{{lang_name('reset_to_start_your_session')}}</p>

    @includeIf("layouts.msg")
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

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
        <div class="input-group mb-3">
            <input id="password-confirm" type="password"  placeholder="{{lang_name('Password2')}}" class="form-control" name="password_confirmation" >
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">{{lang_name('Reset')}}</button>
            </div>
        </div>
    </form>

@endsection
