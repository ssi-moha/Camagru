
<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Camagru</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>        
    </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Camagru</a>
  <div class="navbar" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=gallery">Gallery</a>
      </li>
      <?php if (!isset($_SESSION['logged'])) 
          {?>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=subscribe">Sign up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=auth">Sign in</a>
      </li>
      <?PHP 
          }
          else { ?>
          <li class="nav-item" ><a class="nav-link" href="index.php?page=camera">Camera</a></li>
          <li class="nav-item" ><a class="nav-link" href="index.php?page=new">+</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php?page=options">Options</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php?page=logout">Log out</a></li>
          <?php } ?>
    </ul>
  </div>
  </nav>
    <?= $view?>
  </body>
</html>
