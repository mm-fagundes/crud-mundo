<head>
    <link rel="stylesheet" href="/crud-mundo/web/css/style.css">
</head>

<body>
    <div class="pg1">
        <div class="formulario">
            <form action="../processos/processo-paises.php" method="POST">
                <div class="box">
                    <input type="text" name="nome" id="nome" placeholder="Nome do País"   required>
                </div>    
               
                <div class="box">
                    <input type="number" name="populacao" id="populacao" placeholder="População do País">
                </div>
                
                <div class="box">
                    <select id="continente" name="continente" required>
                        <option value="NA">NA</option>
                        <option value="SA">SA</option>
                        <option value="EU">EU</option>
                        <option value="AS">AS</option>
                        <option value="AF">AF</option>
                        <option value="OC">OC</option>
                    </select>
                </div>
                
                <input type="submit" value="Cadastrar">
            </form>
        </div>
    </div>
</body>