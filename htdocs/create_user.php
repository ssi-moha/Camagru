<?php
    session_start();
    include "connect_db.php";    
    $new_username = $_POST['username'];
    $new_passwd = $_POST['passwd'];

    if (preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/', $new_passwd) == 0)
    {    
        $err_mess = "Votre mot de passe doit contenir au moins 8 caractères, dont 1 majuscules, 1 minuscules et un chiffre";        
        header("Location: index.php?$err_mess");
        exit;
    }
    
    if ($_POST['submit'] == 'OK' && $new_passwd == $_POST['chk_passwd'])
    {
        $db = connect_db();
        $db->exec() or die(print_r($db->errorInfo(), true));                
    }

?>