<?php
include "includes/header.php";
include "core/validateRegister.php";
if(!isset($_SESSION['logged_in']))
{
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
    <input type="submit" name="submit" value="register" >
    </form>
<?php
}
else
{
    echo "<p class=\"center\"><h2>You already have an account</h2></p>";
}
include "includes/footer.php";
?>
