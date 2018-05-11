<?php



function control_sub($username, $email, $passwd)
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $passwd = $_POST['passwd'];
    $user = new User($username, $email, $passwd);
}