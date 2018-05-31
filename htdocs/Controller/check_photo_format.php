<?php

function check_format_photo($photo_name)
{
    if (preg_match('/([a-z]+\.[a-z]){2,}/', $photo_name))
        echo "error".PHP_EOL;
}