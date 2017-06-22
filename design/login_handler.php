<?php
$email = $_POST['email'];
$password = sha1($_POST[$password]);

$sql = "SELECT * FROM users WHERE email = :email AND password = :password";
dbQuery($sql, [':email' => $email],[':password' => $password]);