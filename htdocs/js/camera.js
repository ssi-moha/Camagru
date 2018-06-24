
import HttpPostRequest from './ajax'
    
var streaming = false,
video        = document.querySelector('#my-video'),
canvas       = document.querySelector('#canvas'),
startbutton  = document.querySelector('#startbutton'),
touchbutton = document.querySelector('#touch'),
photo = document.querySelector('#photo'),
width = 500,
height = 0;

navigator.getMedia = (navigator.getUserMedia || navigator.mozGetUserMedia)

if (navigator.getMedia) {
    navigator.getMedia({audio : false, video : {height : 500, width : 800}} ,function(stream){
        video.srcObject = stream;
        video.play();    
    } ,function(err) {
        console.log("An error occured! " + err);
    });
}

video.addEventListener('canplay', function(ev){
    if (!streaming) {
      height = video.videoHeight / (video.videoWidth/width);
      video.setAttribute('width', width);
      video.setAttribute('height', height);
      canvas.setAttribute('width', width);
      canvas.setAttribute('height', height);
      streaming = true;
    }
  }, false);

  startbutton.addEventListener('click', function(ev){
    takepicture();
    photo.style.visibility = 'visible';
    touchbutton.style.visibility = 'visible';
    ev.preventDefault();
}, false);

function takepicture() {
    canvas.width = width;
    canvas.height = height;
    canvas.getContext('2d').drawImage(video, 0, 0, width, height);
    var data = canvas.toDataURL('image/png');
    canvas.style.display = 'none';
    photo.setAttribute('src', data);
  }