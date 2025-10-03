<?php

$servername = "localhost";
$username = "root"; 
$password = "";
$database = "crud_mundo";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

else{
    echo '<script type="text/javascript"> alert("Conexão bem sucedida.") </script>';
}

$conn->close();



?>