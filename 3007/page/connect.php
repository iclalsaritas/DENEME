<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "verimlilik";
$connect = new mysqli($servername, $username, $password, $dbname);
$connect->set_charset("utf8");
if ($connect->connect_error) {
echo "Bağlantı başarısız";
}


?>