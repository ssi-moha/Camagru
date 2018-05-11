<?php

function test()
{
    echo "test".PHP_EOL;
}

     Class User
     {
            public $id;
            public $username;
            public $passwd;
            public $email;
            public $private;
            public $nb_posts;
            
            public function __construct($new_username, $new_email, $new_passwd)
            {
                print("Constructor called".PHP_EOL);    
                test();
                if (check_username($new_username) == FALSE || check_email($new_email) == FALSE)
                    return ;
                create_user($new_username, $new_passwd, $new_email);
            }

            public function __destruct()
            {
                print("Destructor called".PHP_EOL);
            }

    }