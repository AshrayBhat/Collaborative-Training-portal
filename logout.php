<?php
session_start();
if (isset($_SESSION['email']) && isset($_SESSION['password']))
{
    echo "destroying session";
    unset($_SESSION['Email']);
    unset($_SESSION['Password']);
}
header("location:index.php");
?>



