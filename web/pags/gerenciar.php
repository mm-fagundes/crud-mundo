<?php
include 'navbar.php';
include '../conn/connection.php';
include 'links.php';
?>


<div class="pg1">
    <div class="formulario">
        <form action="gerenciar.php" method="POST">
            <div class="box">
                <h1>Gerenciar País</h1>
            </div>
            <div class="box">
                <input type="text" name="pais" required placeholder="Nome do País">
            </div>
            <div class="box"><input type="submit" value="Consultar"></div>
        </form>
    </div>
</div>




<?php
$escolha = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $escolha = $_POST['pais'];
}


if (!empty($escolha)) {

    $stmt = $conn->prepare("select id, nome, populacao from paises where nome like ?");
    $termo_busca = '%' . $escolha . '%';
    $stmt->bind_param("s", $termo_busca);
    $stmt->execute();
    $busca = $stmt->get_result();
    $stmt->close();


    if ($busca->num_rows > 0) {
        echo "
        <div class='consulta'> 
        <table>
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>População</td> 
                <td class='edit'>Editar</td>
                <td class='delete'>Deletar</td>
            </tr>
        ";
        while ($linha = $busca->fetch_assoc()) {
            echo "    
                <tr>
                    <td class='id'>
                            {$linha['id']}
                    </td>
                    <td class='nome'>
                            {$linha['nome']}
                    </td>
                    <td class='populacao'>
                            {$linha['populacao']}
                    </td>    
                    <td class=''>
                            <a href='editar.php'>Editar</a>
                    </td>
                    <td class=''>
                            <a href='deletar.php'>Deletar</a>
                    </td>
                </tr>
            ";
        }


        echo "</table> </div>";
    } else {
        echo "Nenhum resultado encontrado.";
    }






}

$sql = "select * from paises where nome like '%" . $escolha . "%'";
$busca = $conn->query($sql);







?>