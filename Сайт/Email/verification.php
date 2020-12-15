<?php
require '../db/db.php';


if (isset($_GET['act'])){

$token = $_GET['act'];
$verUser = R::findOne('users', 'token = ?', $token);

$verUser->verif = 1;
R::store($verUser);
header('Location:../User/trueverif');
}

?>