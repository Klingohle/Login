<?php if (isset($info)): ?>
    <p class='info'><?= $info ?></p>
<?php endif; ?>

<form action="login.php" method="post">
    <input type="text" name="username" id="username" required="required" placeholder="Username" />
    <input type="password" name="password" id="password" required="required" placeholder="Password" />
    <input type="submit" value="login" class="button" />
</form>