@extends('layout')

@section('content')
<div class="flex justify-center items-center">
    <form method="POST" action="{{ route('login') }}" class="login-form w-1/2 my-12 mx-auto text-center flex flex-col justify-center items-center form-default p-5">
        <div class="text-xl m-4">{{ __('Login') }}</div>
        @csrf

        <div class="flex flex-row justify-around w-full m-2">
            <label for="username" class="">{{ __('Username') }}</label>

            <div class="">
                <input id="username" type="username" class="form-input form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                @if ($errors->has('username'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="flex flex-row justify-around w-full m-2">
            <label for="password" class="">{{ __('Password') }}</label>

            <div class="">
                <input id="password" type="password" class="form-input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="flex flex-row m-2">
                <button type="submit" class="submit-button">
                    {{ __('Login') }}
                </button>
        </div>
    </form>
</div>
@endsection
