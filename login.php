<?php
include "includes/header.php";
include "core/validateLogin.php";
if(!isset($_SESSION['logged_in']) && !isset($_SESSION['admin']))
{
?>
    <form method="post" action="#">
    username <br/>
    <input type="text" name="username" required><p/>
    email <br/>
    <input type="password" name="password" required> <p/>
    <input type="submit" name="submit" value="register">
    </form>
<?php
}
else
{
    echo "<p class=\"center\"><h2>You're Logged in already</h2></p>";
}
include "includes/footer.php";
?>