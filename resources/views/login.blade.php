@extends('layouts.app')
@section('title', 'Login')
@section('content')
<section id="login">
    <h2>~Login~</h2>
    <form method="POST" action="{{ route('login.process') }}">
        @csrf
        <label for="username">Username</label>
        <input type="text" id="username" name="username" value="{{ old('username') }}" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        @error('username') <p class="error">{{ $message }}</p> @enderror
        @error('password') <p class="error">{{ $message }}</p> @enderror

        <small>Admin: admin / admin123</small><br>
        <small>User: fauzi / fauzi123</small>

        <button type="submit">Masuk</button>
    </form>
</section>
@endsection
