<head>
    <link rel="stylesheet" href="/crud-mundo/web/css/style.css">
</head>

<body>
    <form action="../processos/processo-paises.php" method="POST">
        <label for="nome">Nome do País:</label>
        <input type="text" name="nome" id="nome" required>

        <label for="populacao">População:</label>
        <input type="number" name="populacao" id="populacao">

        <label for="continente">Continente:</label>
        <select id="continente" name="continente" required>
            <option value="NA">NA</option>
            <option value="SA">SA</option>
            <option value="EU">EU</option>
            <option value="AS">AS</option>
            <option value="AF">AF</option>
            <option value="OC">OC</option>
        </select>

        <input type="submit" value="Cadastrar">





    </form>

</body>