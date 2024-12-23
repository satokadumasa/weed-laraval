@extends('layouts.app')
@section('content')
<h2>Login</h2>

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
<form action="/login" method="POST">
    @csrf
    <div>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="{{ old('email') }}" >
    </div>
    <div>
        <label for="email">Password</label>
        <input type="password" name="password" id="password" value="{{ old('password') }}" >
    </div>
    <div>
        <button>Login</button>
    </div>
</form>
@endsection
