<?php

require_once 'inc/config.inc.php';
require_once 'inc/functions.inc.php';
session_start();

if (isset($_SESSION['info'])) {
    $info = $_SESSION['info'];
    unset($_SESSION['info']);
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Index</title>
</head>

<body>
    <h2>Welcome</h2>
    <div>
        <aside id="menu">
            <?php if (isLoggedIn()): ?>
                <?php require 'inc/mainmenu.tpl.php'; ?>
            <?php else: ?>
                <?php require 'inc/loginformular.tpl.php'; ?>
            <?php endif; ?>
        </aside>
    </div>
</body>
</html>
