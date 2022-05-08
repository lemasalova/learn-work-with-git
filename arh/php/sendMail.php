<?php
//header('Content-Type: text/html; charset=utf-8'); //если проблемы с кодировкой
//перед открывающим тегом ничего ставить нельзя,не будет работать
//$userName = $_GET['user_name']; //указывается тоже имя что и в форме, обязательно ставить точку с запятой
//mail('le_masalova@mail.ru', 'Тестовое письмо', "Привет, $userName");
$userName = $_POST['user_name'];
echo "Hello! $userName";
