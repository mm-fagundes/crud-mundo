<?php 
include '../conn/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = isset($_POST['nome']) ? trim($_POST['nome']) : '';
    $populacao = isset($_POST['populacao']) && $_POST['populacao'] !== '' ? (int) $_POST['populacao'] : null;
    $pais = isset($_POST['pais']) && $_POST['pais'] !== '' ? (int) $_POST['pais'] : null;


    $sql = "insert into cidades (nome, populacao, pais) values (?, ?, ?)";

    if($stmt = $conn->prepare($sql)) {
        $stmt-> bind_param("sii", $nome, $populacao, $pais);


        session_start();
        if ($stmt -> execute()){
            $_SESSION['msg'] = "Cidade cadastrada com sucesso.";
            header("location: /crud-mundo/web/pags/cadastros/cadastro-cidades.php");
            exit;
        }
        else{
            echo "Erro ao cadastrar cidade." . $stmt->error;
        }

        $stmt->close();
    }
    else{
        echo "Erro ao preparar consulta: " . $conn->error;
    }

    $conn->close();


 }
 ?>