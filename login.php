<?php
session_start();

$valid_email = "exemplo@gmail.com";
$valid_password_hash = md5("123");

$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

if ($email === $valid_email && md5($password) === $valid_password_hash) {
    $_SESSION['loggedin'] = true;
    $_SESSION['email'] = $email;
    header("Location: array.php");
    exit();
} else {
    echo "O Login Está Inválido. Tente Novamente <a href='index.php'>Tente novamente</a>.";
}
?>