<?php
session_start();
session_destroy();
sleep(1);
header('Location:index.php?msg=disco');
?>
