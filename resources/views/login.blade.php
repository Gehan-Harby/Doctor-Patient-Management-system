@extends('main_templet')

@section('main')
<h1>Login</h1>
<form method="post" action="/login">
    @csrf
    <div class="form-field">
        <label for="email">Email:</label>
        <input required  type="email" name="email" id="email" value="{{ old('email') }}">
        @error('email') <p class="error">{{ $message }}</p> @enderror
    </div>
    <div class="form-field">
        <label for="password">Password:</label>
        <input required type="password" name="password" id="password">
        @error('password') <p class="error">{{ $message }}</p> @enderror
        @if(session('error')) <p class="error">{{ session('error') }}</p> @endif
    </div>
    <input class="btn btn-primary btn-big" type="submit" value="Login">
    <p>Don't have an account? <a href="/register">Register</a></p>
</form>
@endsection