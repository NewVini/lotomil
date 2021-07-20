<?php 

//Conexao com banco

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "db-mail";

$connect = mysqli_connect($servername, $username, $password, $db_name) or die ($connect);

if(mysqli_connect_error()):
echo "Deu erro".mysqli_connect_error();
endif;