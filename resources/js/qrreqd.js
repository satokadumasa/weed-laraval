// ここにJS
const video = document.createElement('video');
const canvasElement = document.getElementById('canvas');
const canvas = canvasElement.getContext('2d');
const loading = document.getElementById('loading');
const output = document.getElementById('output');
let previousData = '';

navigator.mediaDevices.getUserMedia({
        video: {
            facingMode: 'environment',
        }
    })
    .then((stream) => {
        video.srcObject = stream;
        video.setAttribute('playsinline', true);
        video.play();
        requestAnimationFrame(tick);
    });

function tick() {
    loading.innerText = 'ロード中...';
    if (video.readyState === video.HAVE_ENOUGH_DATA) {
        loading.hidden = true;
        canvasElement.hidden = false;
        canvasElement.height = video.videoHeight;
        canvasElement.width = video.videoWidth;
        canvas.drawImage(video, 0, 0, canvasElement.width, canvasElement.height);
        var imageData = canvas.getImageData(0, 0, canvasElement.width, canvasElement.height);
        var code = jsQR(imageData.data, imageData.width, imageData.height, {
            inversionAttempts: 'dontInvert',
        });
        // 直前に読み込んだQRコードの会員ならスキップさせる。そうしないと同じQRコードを常にリクエストしちゃう
        if (code && code.data !== previousData) {
            previousData = code.data; // いま読み込んだデータをチェックに使うために変数に退避しておく
            @this.attend(code.data) // livewireのメソッドを実行する。引数には会員IDが入る
        }
    }
    requestAnimationFrame(tick);
}
