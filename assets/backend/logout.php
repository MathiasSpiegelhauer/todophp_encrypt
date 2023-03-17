<?php
session_start();
session_destroy();
header("location:http://sej-server.dk/todoPhp/index.php?msg=logout");
?>