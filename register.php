<?php
include "includes/header.php";
include "core/validateRegister.php";
?>
    <form method="post" action="#">
    username <br/>
    <input type="text" name="username" required><p/>
    email <br/>
    <input type="email" name="email" required> <p/>
    password <br/>
    <input type="password" name="password" required> <p/>
    repeat password <br/>
    <input type="password" name="repeatPassword" required> <p/>
    <input type="submit" name="submit" value="register" required>
    </form>
<?php

include "includes/footer.php";
?>
