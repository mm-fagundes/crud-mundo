<?php
include 'navbar.php';
include '../conn/connection.php';
$escolha = '';
?>


<head>
    <title>Crud Mundo</title>  
</head>

<body>
    

<form action="index.php" method="POST">
    <input type="text" name="pais">
    <input type="submit" value="Enviar">
</form>






<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $escolha = $_POST['pais'];
}




$sql = "select * from paises where nome = '$escolha'";
$busca = $conn -> query($sql);

if($busca->num_rows > 0){
    while($linha = $busca->fetch_assoc()){
        echo "ID: " . $linha['id'] . " - Nome: " . $linha['nome'] . "<br>";
    }
}





?>



</body>