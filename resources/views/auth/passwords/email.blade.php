@extends('auth.layouts')

@section('title')
    {{lang_name('Reset')}}
@endsection

@section('content')


    <p class="login-box-msg">{{lang_name('reset_to_start_your_session')}}</p>

    @includeIf("layouts.msg")
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
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
        <div class="row">
            <!-- /.col -->
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">{{lang_name('Reset')}}</button>
            </div>
            <!-- /.col -->
        </div>
    </form>


@endsection
