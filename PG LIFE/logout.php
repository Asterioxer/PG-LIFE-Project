<?php
   session_start();
   session_destroy();
   header("location: /PG LIFE/index.php");
   exit();
?>