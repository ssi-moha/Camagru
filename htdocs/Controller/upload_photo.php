<?php

function upload_photo($post, $file)
{
    if (!isset($post['title']) || !isset($post['submit'])|| $post['submit'] != 'OK' || !isset($post['userfile']))
        return FALSE;
    create_upload_dir();
    if ($file['userfile']['error'] > 0) 
        $erreur = "Le fichier est trop gros";
    if ((check_extension($file['userfile']['name'])) == NULL)
        $erreur = "Mauvaise extension";
    $pic = $file['userfile']['name'];     
    //print_r($file);
    $res = move_uploaded_file($file['userfile']['tmp_name'],'private/tmp/'.$pic);
    $_SESSION['url'] = $pic;
    //if ($res)
        //echo "Success";
    //    $new_photo = new Photo ($title, $name);
}