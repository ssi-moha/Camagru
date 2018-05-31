<?php

function create_upload_dir()
{
    if (!file_exists('private'))
        mkdir('private');
    if (!file_exists('private/tmp'))
        mkdir('private/tmp');
}