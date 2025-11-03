<?php 
include '../conn/connection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = isset($_POST['id']) ? trim($_POST['id']) : '';
    $nome = isset($_POST['nome']) ? trim($_POST['nome']) : '';
    $populacao = isset($_POST['populacao']) && $_POST['populacao'] !== '' ? (int) $_POST['populacao'] : null;
    $pais = isset($_POST['pais']) && $_POST['pais'] !== '' ? (int) $_POST['pais'] : null;


    $sql = "UPDATE cidades
        SET
        nome = ?,
        populacao = ?,
        pais = ?
        WHERE
        id = ?;";

    if($stmt = $conn->prepare($sql)) {
        $stmt-> bind_param("siii", $nome, $populacao, $pais, $id);


        session_start();
        if ($stmt -> execute()){
            $_SESSION['msg'] = "Cidade atualizada com sucesso.";
            header("location: /crud-mundo/web/pags/editar.php");
            exit;
        }
        else{
            echo "Erro ao atualizar cidade." . $stmt->error;
        }

        $stmt->close();
    }
    else{
        echo "Erro ao preparar consulta: " . $conn->error;
    }

    $conn->close();


 }
 ?>