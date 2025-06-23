<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body class="container w-50 my-5 m-auto">
    
    <h1 class="text-center my-3">Cadastro de Carros</h1>
    <form class="row g-3" action="cadastro-carro.php" >
        <div class="col-12">
            <label class="form-label">Modelo do Carro</label>
            <input class="form-control" type="text" name="modelo" placeholder="digite o modelo">
        </div>
        <div class="col-8" >
            <label class="form-label">Marca do Carro</label>
            <select class="form-select" name="marca"aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">Chevrolet</option>
                <option value="2">Volkswagem</option>
                <option value="3">Ford</option>
                <option value="4">Honda</option>
                <option value="5">Hyundai</option>
                <option value="6">Toyota</option>
                <option value="7">Mitsubishi</option>
                <option value="8">BYD</option>
                <option value="9">Mercedes-Benz</option>
            </select>
        </div>
        <div class="col-4" >
            <label class="form-label">Ano do Carro</label>
            <input class="form-control" type="number" name="ano" placeholder="digite o ano">
        </div>
        <div class="col-12 mt-5">
            <button class="btn btn-danger w-100">Cadastrar</button>
        </div>
    </form>
    
</body>
</html>