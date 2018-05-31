<?php

function check_extension($filename)
{
    $ret = explode('.', $filename);
    if ($ret[1] != 'jpg' && $ret[1] != 'jpeg' && $ret[1] != 'png')
        return FALSE;
    return $ret[1];
}