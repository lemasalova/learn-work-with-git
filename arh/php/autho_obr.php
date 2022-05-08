<?php
session_start();
header('Content-Type: text/html; charset=utf-8');

$mysqli = mysqli_connect("localhost", "bizqhhwq_0207", "123654", "bizqhhwq_0207");
if ($mysqli == false) {
    print("error");
} else {
    $email = trim(mb_strtolower($_POST['email']));
    $pass = trim($_POST['pass']);

    //echo "Email: $email<br>Пароль: $password";
    $result = $mysqli->query("SELECT * FROM `users` WHERE `email` = '$email'");
    //var_dump($result);
    $result = $result->fetch_assoc();
    //var_dump($result);
    //var_dump($result["pass"]);

    if (password_verify($pass, $result['pass'])) {
        // print("exist");
        echo "ok";
        $_SESSION['name'] = $result['name'];
        $_SESSION['lastname'] = $result['lastname'];
        $_SESSION['email'] = $result['email'];
        $_SESSION['id'] = $result['id'];
    } else {
        echo "user_not_found";
        // $mysqli->query("INSERT INTO `users`(`email`, `pass`) VALUES ('$email', '$pass')");
        // print("ok");
    }
}
