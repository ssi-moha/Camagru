<?php
    session_start();
    include "connect_db.php";    
    $new_username = $_POST['username'];
    $new_passwd = $_POST['passwd'];
    $mail = $_POST['mail'];
    $db = connect_db();
    $user_list = $db->query("SELECT username FROM user") or die(print_r($db->errorInfo(), true));

    
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL))
    {
        $err_mess = "Nikomouk";        
        echo $err_mess;
        return ;
        //header("Location: register.php?err=$err_mess");        
    }
    if (preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,}$/', $new_passwd) == 0)
    {    
        $err_mess = "Votre mot de passe doit contenir au moins 8 caractères, dont 1 majuscules, 1 minuscules et un chiffre.";        
        header("Location: register.php?err=$err_mess");
        exit;
    }
    else if ($new_passwd != $_POST['chk_passwd'])
    {
        $err_mess = "Les 2 mots de passe ne correspondent pas.";        
        header("Location: register.php?err=$err_mess");        
        exit;
    }   
    while($res = $user_list->fetch(PDO::FETCH_ASSOC)) 
    {
        if ($new_username == $res['username'])
        {
            $err_mess = "User $new_username already exists".PHP_EOL;
            header("Location: register.php?err=$err_mess");            
            exit;
        }
    }
    if ($_POST['submit'] == 'OK' && $new_passwd == $_POST['chk_passwd'])
    {
        $pass_hashed = hash('whirlpool', $new_passwd);
        $db->exec("INSERT INTO user values ('$new_username', '$pass_hashed', '$mail');") or die(print_r($db->errorInfo(), true));                
    }

?>