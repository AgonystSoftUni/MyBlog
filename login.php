<?php
include "includes/header.php";
include "core/validateLogin.php";
if(!isset($_SESSION['logged_in']))
{
?>
    <form method="post" action="#">
    username <br/>
    <input type="text" name="username" required><p/>
    password <br/>
    <input type="password" name="password" required> <p/>
    <input type="submit" name="submit" value="login">
    </form>
<?php
}
else
{
    echo "<p class=\"center\"><h2>You're Logged in</h2></p>";
}
include "includes/footer.php";
?>