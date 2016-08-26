<?php
include "includes/header.php";
include "core/validateLogin.php";
?>
    <form method="post" action="#">
    username <br/>
    <input type="text" name="username" required><p/>
    email <br/>
    <input type="password" name="password" required> <p/>
    <input type="submit" name="submit" value="register" required>
    </form>
<?php
include "includes/footer.php";
?>