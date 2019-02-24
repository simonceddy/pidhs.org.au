@extends('layout')

@section('content')
<div class="login-form flex justify-center items-center flex-col">
    <div class="text-xl m-4">{{ __('Login') }}</div>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group row">
            <label for="username" class="col-sm-4 col-form-label text-md-right">{{ __('Username') }}</label>

            <div class="col-md-6">
                <input id="username" type="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                @if ($errors->has('username'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row m-3">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="submit-button">
                    {{ __('Login') }}
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
