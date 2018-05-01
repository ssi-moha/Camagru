<?php
    session_start();
    include "connect_db.php";    
    $username = $_POST['username'];
    $passwd = $_POST['passwd'];

    if ($_POST['submit'] != 'OK')
        return ;
        
        $db = connect_db();
        $user_list = $db->query("SELECT * FROM user") or die(print_r($db->errorInfo(), true));                
        while($row = $user_list->fetch(PDO::FETCH_ASSOC)) 
        {
            if ($username == $row['username'])
            {
                if (hash('whirlpool', $passwd) == $row['passwd'])
                    echo "Success";
                else
                    echo "Wrong password";
                return;
            }
        }
        echo "User not founded";

?>