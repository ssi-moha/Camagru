<?php


     Class Photo
     {
            public $id_photo;
            public $id_user;
            public $path;
            public $title;
            public $nb_like;
            public $nb_comment;
            
            public function __construct($new_title, $new_name)
            {
                if (check_format_photo($new_name) == FALSE)
                    return ;
            }

            public function __destruct()
            {
                print("Destructor called".PHP_EOL);
            }

    }