<?php

session_start();

session_unset();
session_destroy();

setcookie('type','',time()-31536000000);
setcookie('Loggedinuser','',time()-31536000000);

header("Location: login.php");

?>
