<?php
    setcookie("loggedin", "", time()-60*60);
    header("Location: login.php");
?>