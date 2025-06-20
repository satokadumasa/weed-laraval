@extends('layouts.app')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/jsqr@1.4.0/dist/jsQR.min.js">
<script src="/js/qrread.js">
<div>
    <div id="loading">ブラウザのカメラの使用を許可してください。</div>
    @if (session()->has('message'))
    <div class="alert alert-success d-flex align-items-center" role="alert">
        <i class="fa-solid fa-circle-check mr-1"></i>
        {{ session('message') }}
    </div>
    @endif
    <canvas id="canvas" hidden></canvas>

    <style>
        #canvas {
            width: 100%;
            height: 720px;
        }
    </style>
    {{-- @pushで囲んだ内容を@stackで出力する --}}
    @push('scripts')
    <script>

    </script>
    @endpush

</div>@endsection
