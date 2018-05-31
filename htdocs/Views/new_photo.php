<div class="row">
<main class="col-md-6">
  <p>Hello world </p>
</main>
<form method="post" enctype="multipart/form-data" action="index.php?page=upload">
  <div class="form-group">
    <label for="title">Choose a title</label>
    <input type="text" name="title" class="form-control-file" id="title">
    </div>
  <div class="form-group">
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <label for="pic">Choose picture to upload</label>
    <input type="file" name="userfile" class="form-control-file" id="pic">
    </div>
  <div class="btn btn-default">
    <input type="submit" name="submit" class="form-control-file" id="submit" value="OK">
  </div>
</form>
</div>