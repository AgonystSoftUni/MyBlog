<?php
include "includes/header.php";
$post = $posts->getPostById($_GET['id']);
echo "<article><h1>" . $post[0]['title'] . "</h1><br/>posted by " .$post[0]['username']." " .$post[0]['date']. "<p>" . $post[0]['descr'] . "</p></article>";
?>
<hr><p id="comments"> Comments </p><hr>

<?php
include "includes/footer.php";
?>


