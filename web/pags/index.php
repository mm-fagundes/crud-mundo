<?php
include 'navbar.php';
include '../conn/connection.php';
?>


<head>
    <title>Crud Mundo</title>
</head>

<body>

    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <?php
            if ('REQUEST_METHOD == "POST"') {
                $sql = "select id, nome, populacao from paises";
                $result = $conn->query($sql);
                echo $result;
            }
            ?>
        </div>
    </div>






</body>