@extends('layouts.app')
@section('content')
<h2>Note List</h2>
<div>
    @foreach ($notes as $note)
    <div>
        [{{ $note->id }}]
    </div>
    @endforeach
</div>
@endsection
