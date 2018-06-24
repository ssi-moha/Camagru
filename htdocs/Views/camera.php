
<main>
        <div class="container">
                <form class="row" action="#" id="form">
                    <div class="mt-2 col-md-6">
                        <video id="my-video" name="video" class="embed-responsive" autoplay></video>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <button class="mt-1 btn btn-primary" name="picbutton" id="startbutton">Prendre une photo</button>
                        </div>
                    </div>
                    <div class="mt-2 col-md-6"> 
                        <canvas id="canvas" name="canvas" ></canvas>
                        <img id="photo" name="photo" alt="photo" style="visibility: hidden" >
                        <div class="row">
                            <div class="col-md-3"></div>
                            <button type="submit" class="mt-1 btn btn-primary" id="touch" style="visibility: hidden" >Retoucher</button>
                        </div>
                    </div>
                </form>
        </div>
</main> 

<script type="module" src="js/ajax.js"></script> 
<script type="module" src="js/camera.js"></script> 

