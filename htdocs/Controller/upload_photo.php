<?php

function upload_photo($post, $file)
{
    if (!isset($post['title']) || !isset($post['submit'])|| $post['submit'] != 'OK' || !isset($file['userfile']))
    {
        $_SESSION["error"] = "out".PHP_EOL;                        
        return FALSE;
    }
    create_upload_dir();
    if ($file['userfile']['error'] > 0) 
        $erreur = "Le fichier est trop gros";
    if ((check_extension($file['userfile']['name'])) == NULL)
        $erreur = "Mauvaise extension";
    $pic = $file['userfile']['name'];     
    $res = move_uploaded_file($file['userfile']['tmp_name'],'private/tmp/'.$pic);
    $_SESSION['url'] = $pic;
    return TRUE;
    //if ($res)
    //    $new_photo = new Photo ($title, $name);
}