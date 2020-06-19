<?php 

// Config
require_once "inc/config.php";

session_destroy();

echo "<script>alert('Berhasil logout! Terima kasih.')</script>";
echo "<script>location='index.php'</script>";