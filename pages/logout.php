<?php
session_start();

session_unset();
session_destroy();

setcookie("welcomeUser", "", time() - 3600, "/");
setcookie("loggedUser", "", time() - 3600, "/");

header("Location: login.php?res=logout");
exit;
?>