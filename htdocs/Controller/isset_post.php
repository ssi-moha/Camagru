<?php

function isset_post($post)
{
    if (isset($post['username']) && isset($post['passwd']) && isset($post['email']) && isset($post['submit']))
        return TRUE;
    return FALSE;
}
function isset_key($post)
{
    if (isset($post['username']) && isset($post['passwd']) && isset($post['submit']))
        return TRUE;
    return FALSE;    
}