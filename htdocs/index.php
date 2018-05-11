<?php

session_start();
require_once "Controller/check_username.php";
require_once "Entity/User.php";
require_once "Model/create_user.php";
require_once "Controller/isset_post.php";
require_once "Controller/connect_user.php";
require_once "Controller/check_email.php";
require_once "Controller/check_valid.php";
require_once "Controller/control_sub.php";
require_once "Controller/set_string_confirm.php";
require_once "db_connect.php";
require_once "Model/get_user_by_username.php";
require_once "Model/get_user_by_mail.php";
require_once "Model/insert_valid.php";
require_once "Model/get_user_by_valid.php";

$view = NULL;

if (!isset($_GET['page']))
{
  require "Views/template.php";
  exit ;
}
if ($_GET['page'] == 'auth')
{
  ob_start();
  require "Views/auth.php";
  $view = ob_get_clean();
  require "Views/template.php";  
}
else if (isset_key($_POST) && $_GET['page'] == 'key')
{
  if (connect_user($_POST['username'], $_POST['passwd']) === TRUE)
    $view = "connexion Sucess";
  else
    $view = "fail";
  require "Views/template.php";  
}
else if (isset_post($_POST) && $_GET['page'] == 'register')
{
  control_sub($_POST['username'], $_POST['email'], $_POST['passwd']);
  $view = "sub Sucess";
  require "Views/template.php";    
}
else if ($_GET['page'] == 'subscribe')
{
  ob_start();
  require "Views/subscribe.php";
  $view = ob_get_clean();
  require "Views/template.php";  
}
else if ($_GET['page'] == 'logout')
{
  $_SESSION['logged'] = NULL;
  require "Views/template.php";    
}
else if ($_GET['page'] == ['reset'])
{
  ob_start();
  require "Views/forgot_pass.php";
  $view = ob_get_clean();
  //require "Views/template.php";
}
else if ($_GET['page'] == 'verify')
{
  if (isset($_GET['c']))
  {
    if (($user = check_valid($_GET['c'])) == FALSE)
    { 
      $view = "FAIL"; 
      require "Views/template.php";
    }
    else
    {
      $_SESSION['logged'] = $user;
      insert_valid($user);
      require "Views/template.php";      
    }
  }
}
else if ($_GET['page'] == 'camera' && isset($_SESSION['logged']))
{
      ob_start();
      require "Views/camera.php";
      $view = ob_get_clean();
      require "Views/template.php";      
}
else if ($_GET['page'] == 'gallery')
{
      ob_start();
      require "Views/gallery.php";
      $view = ob_get_clean();
      require "Views/template.php";      
}
else if ($_GET['page'] == 'new')
{
      ob_start();
      require "Views/new_photo.php";
      $view = ob_get_clean();
      require "Views/template.php";      
}
else
  require "Views/template.php";












