<head>
    <link rel="stylesheet" href="/crud-mundo/web/css/style.css">
</head>

<body>
    <?php include '../navbar.php'; 
    session_start();
    if(isset($_SESSION['msg'])){
        echo '<script>alert("' . $_SESSION['msg'] .'")</script>';
        unset($_SESSION['msg']);
    }
    
    
    
    ?>
    <div class="pg1">
            <div class="formulario">
                <form action="../../processos/processo-paises.php" method="POST">
                    <div class="box">
                        <h1>Cadastrar Países</h1>
                    </div>
                    <div class="box">
                        <input type="text" name="nome" id="nome" placeholder="Nome do País"   required>
                    </div>    
                
                    <div class="box">
                        <input type="number" name="populacao" id="populacao" placeholder="População do País">
                    </div>
                    
                    <div class="box">
                        <select id="continente" name="continente" required>
                            <option value="NA">North America</option>
                            <option value="SA">South America</option>
                            <option value="EU">Europe</option>
                            <option value="AS">Asia</option>
                            <option value="AF">Africa</option>
                            <option value="OC">Oceania</option>
                        </select>
                    </div>
                    
                    <div class="box"><input type="submit" value="Cadastrar"></div>
                </form>
            </div>
    </div>
</body>