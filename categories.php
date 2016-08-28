<?php
include "includes/header.php";
include_once "core/posts/categories.php";
$categories = new Categories();
var_dump($categories->getAll());
?>

<?php
include "includes/footer.php";
?>
