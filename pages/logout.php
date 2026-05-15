<?php
session_start();

$registeredUsers = $_SESSION['registered_users'] ?? [];

unset($_SESSION['user']);
unset($_SESSION['response']);
unset($_SESSION['last_login']);

$_SESSION['registered_users'] = $registeredUsers;

setcookie("welcomeUser", "", time() - 3600, "/");
setcookie("loggedUser", "", time() - 3600, "/");

header("Location: login.php?res=logout");
exit;
?>