<?php
require_once 'inc/config.inc.php';
require_once 'inc/functions.inc.php';
session_start();
$username = trim($_POST['username']);
if (
    !empty(USER_INFO[$username]) &&
    (USER_INFO[$username]['password'] === trim($_POST['password']))
) {
    logIn($username);
} else {
    $_SESSION['info'] = 'Something went wrong while logging in - please check and try again.';
}

redirect('index.php');
