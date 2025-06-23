<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir</title>
</head>
<body class = "container w-50 my-5 m-auto">
    
    <h1 class="text-center my-3">Visualização de Carros</h1>

    <table class="table table-striped">

    <tr>
        <th>Modelo</th>
        <th>Marca</th>
        <th>Ano</th>

    </tr>
        
    <?php
        require_once "CarroDAO.php";
        $dados = CarroDAO::consultar();

        for($i=0; $i < count($dados); $i++){

    ?>

    <tr>
        <td><?=$dados[$i]['modelo']?></td>
        <td><?=$dados[$i]['marca']?></td>
        <td><?=$dados[$i]['ano']?></td>

    </tr>

    <?php
    }
    ?>
    </table>

</body>
</html>