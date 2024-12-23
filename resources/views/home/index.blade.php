@extends('layouts.app')
@section('content')

<h2>Home</h2>
<div>
    <form action="/logout" method="POST">
        @csrf
        <button>Logout</button>
    </form>
</div>
@endsection
