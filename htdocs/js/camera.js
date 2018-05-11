

if (navigator.mediaDevices) {
    navigator.mediaDevices.getUserMedia({audio : false, video : {height : 800, width : 500}}).then(function(stream){
        var video = document.getElementById('my-video');
        video.srcObject = stream;
        video.play();        
    });
}