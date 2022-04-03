<?php
require_once 'inc/config.inc.php';
require_once 'inc/functions.inc.php';
session_start();
logOut();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Ausloggen</title>
</head>
<body>
    <div>
        <section>
            <p>
                You are now logged out.<br />
                Thank you for visiting.
            </p>
            <p>
                <a href="index.php" class="backlink">Back to Main Page</a>
            </p>
        </section>
        <aside id="menu">
            <?php require 'inc/loginformular.tpl.php'; ?>
        </aside>     
    </div>
</body>
</html>