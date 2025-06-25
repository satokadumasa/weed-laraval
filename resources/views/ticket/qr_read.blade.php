@extends('layouts.app')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/jsqr@1.4.0/dist/jsQR.min.js">
<script src="/js/qrread.js">
<div>
    <h1>jsQR</h1>
    <div id="wrapper">
        <div id="msg">Unable to access video stream.</div>
        <canvas id="canvas"></canvas>
    </div>
    <script>
        const userMedia = {video: {facingMode: "environment"}};
        navigator.mediaDevices.getUserMedia(userMedia).then((stream)=>{
            video.srcObject = stream;
            video.setAttribute("playsinline", true);
            video.play();
            startTick();
        });

        function startTick(){
            msg.innerText = "Loading video...";
            if(video.readyState === video.HAVE_ENOUGH_DATA){
                canvas.height = video.videoHeight;
                canvas.width = video.videoWidth;
                ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
                // このタイミングでQRコードを判定します
            }
            setTimeout(startTick, 250);
        }
        $(function() {
            startTick();
        });
    </script>
    <style>
        h1{
            text-align: center;
        }

        #wrapper{
            margin: 0px auto 0px auto;
            width: 320px; height: auto;
        }

        #msg{
            margin: 0px; padding: 10px;
            background-color: lightgray;
            text-align: center;
        }

        #canvas{
            width: 100%; height: auto;
            background-color: silver;
        }        
    </style>
</div>@endsection
