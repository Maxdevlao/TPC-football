<?php
session_start();

if(isset($_POST['logout_btn']))
{
    session_destroy();
    unset($_SESSION['fullname']);
    header('Location:login.php');
}

?>