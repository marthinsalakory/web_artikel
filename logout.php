<?php


session_start();
unset($_SESSION['login']);
unset($_SESSION);
header('Location: login.php');
exit;
