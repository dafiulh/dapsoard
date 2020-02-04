<?php
setcookie("login",null,time()-60);
header("Location: login.php");
?>