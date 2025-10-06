<head>
    <link rel="stylesheet" href="/crud-mundo/web/css/style.css">
</head>

<body>



    <?php
        include '../navbar.php';
        include __DIR__ . '/../../conn/connection.php';
        $sql = "select id, nome from paises order by nome asc";
        $resultado = $conn -> query($sql);

        session_start();
        if (isset($_SESSION['msg'])){
            echo '<script>alert("' . $_SESSION['msg'] . '"); </script>';
            unset($_SESSION['msg']);
        }
    ?>


    <div class="pg1">
            <div class="formulario">
                <form action="../../processos/processo-cidades.php" method="post">
                    <div class="box">
                        <h1>Cadastrar Cidades</h1>
                    </div>
                    <div class="box">
                        <input type="text" name="nome" id="nome" placeholder="Nome da Cidade"   required>
                    </div>    
                
                    <div class="box">
                        <input type="number" name="populacao" id="populacao" placeholder="População da Cidade">
                    </div>
                    
                    

                    <div class="box">
                        <select id="pais" name="pais" required>
                            <option value="" selected disabled>País</option>
                            <?php while ($pais = $resultado -> fetch_assoc()): ?>
                                <option value="<?= $pais['id'] ?>"><?= $pais['nome'] ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    
                    <div class="box"><input type="submit" value="Cadastrar"></div>
                </form>
            </div>
    </div>

</body>