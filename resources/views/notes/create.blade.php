@extends('layouts.app')
@section('content')
<h2>Note Create</h2>

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
<form action="/notes/post" method="POST">
    @csrf
    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
    <div class="container text-center">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
                <label for="title">Title</label>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
                <input type="text" name="title" id="title" style="width: 100%" class="form-control" placeholder="Title" aria-label="Title" value="{{ old('title') }}" >
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
                <label for="outline">OutLine</label>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
                <textarea name="outline" id="outline" rows="20" cols="40" style="width: 100%"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
                <label for="detail">Detail</label>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
                <textarea name="detail" id="detail" rows="20" cols="40" style="width: 100%"></textarea>
            <div>
                <button>POST</button>
            </div>
        </div>
    </div>
</form>
@endsection
