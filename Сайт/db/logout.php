<?php  

require "db.php";

// Завершение сесии
unset($_SESSION['logged_user']);
header('Location: ../User/login.php');


?> 