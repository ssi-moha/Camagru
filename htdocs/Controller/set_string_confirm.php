<?php

function set_string_confirm($adress)
{
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";    
    $code = bin2hex(random_bytes(16));
    $mail = '
    <html>
    <head>
        <title>Mail confirm</title>
    </head>
    <body>
        <p>To validate your Camagru account, click <a href=http://localhost:8081/camagru/index.php?page=verify&c='.$code.'>here</p>
    </body>
    </html>
    ';
    if (mail($adress, 'Camagru account', $mail, $headers))
        print("Success".PHP_EOL);
    return $code;        
} 
