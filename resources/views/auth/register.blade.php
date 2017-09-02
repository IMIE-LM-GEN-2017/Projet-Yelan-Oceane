@extends('templates.default')

@section('title', 'Inscription')

@section('content')
    <form method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}

        <label for="email">Your Email address</label>

        <input id="email" type="email" name="email" value="{{ old('email') }}" required>

        @if ($errors->has('email'))
            <strong>{{ $errors->first('email') }}</strong>
        @endif

        <label for="password">Choose a password</label>

        <input id="password" type="password" name="password" required>

        @if ($errors->has('password'))
            <strong>{{ $errors->first('password') }}</strong>
        @endif

        <label for="password-confirm">Confirm this password</label>

        <input id="password-confirm" type="password" name="password_confirmation" required>

        <button type="submit">
            Register
        </button>
    </form>
@endsection