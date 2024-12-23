@extends('layouts.app')
@section('content')
<h2>Register</h2>

@if ($errors->any())
    <div>
        <div>
            Something went wrong!
        </div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/register" method="POST">
    @csrf
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" autofocus>
    </div>
    <div>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="{{ old('email') }}" >
    </div>
    <div>
        <label for="email">Password</label>
        <input type="password" name="password" id="password" value="{{ old('password') }}" >
    </div>
    <div>
        <label for="email_confirmation">Password Confirmation</label>
        <input type="password" name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation') }}" >
    </div>
    <div>
        <button>Regist</button>
    </div>
</form>
<div>
    <label for="remember">
        <input type="checkbox" name="remember" id="remember">
        <span>
            Remember me
        </span>
    </label>
</div>
@endsection
