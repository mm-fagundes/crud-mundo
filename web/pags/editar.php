<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    
</body>
</html>
<?php
    include ('../conn/connection.php');
    include ('navbar.php');
    include ('links.php');
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = ($_POST['id']);
        $nome = ($_POST['nome']);
        $populacao = ($_POST['populacao']);
        $pais = ($_POST['pais']);   
    
    }
    $sql = "SELECT id, nome FROM paises ORDER BY nome ASC";
    $resultado = $conn->query($sql);
?>




<div class="pg1">
    <div class="formulario">
        <form action="../../processos/processo-update-cidades.php" method="post">
            <div class="box">
                <h1>Editar Cidades</h1>
            </div>
            <div class="box">
                <input type="text" name="nome" id="nome" placeholder="Nome da Cidade" value="<?php echo"$nome"?>" required >
            </div>    
                
            <div class="box">
                <input type="number" name="populacao" id="populacao" placeholder="População da Cidade" value="<?php echo"$populacao"?>" required >
            </div>
    
            <div class="box">
                <select id="pais" name="pais" required >
                    <option value="" selected ><?php echo"$pais"?></option>
                    <?php while ($pais = $resultado -> fetch_assoc()): ?>
                        <option value="<?= $pais['id'] ?>"><?= $pais['nome'] ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
    
    <div class="box"><input type="submit" value="Editar"></div>
</form>
</div>
</div>
<?php






































?>