<?php
include '../conn/connection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = isset($_POST['nome']) ? trim($_POST['nome']) : '';
    $populacao = isset($_POST['populacao']) && $_POST['populacao'] !== '' ? (int) $_POST['populacao'] : null;
    $continente = isset($_POST['continente']) ? trim($_POST['continente']) : 'Continente não definido.';


    $sql = "insert into paises (nome, populacao, continente) values (?, ?, ?)";

    if($stmt = $conn->prepare($sql)) {
        $stmt-> bind_param("sis", $nome, $populacao, $continente);

        if ($stmt -> execute()){
            echo "País cadastrado com sucesso.";
            exit;
        }
        else{
            echo "Erro ao cadastrar país.";
        }

        $stmt->close();
    }
    else{
        echo "Erro ao preparar consulta: " . $conn->error;
    }

    $conn->close();


 }

















?>



