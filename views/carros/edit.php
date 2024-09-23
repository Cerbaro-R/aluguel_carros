<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Aluguel de Carros</a>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/carros">Carros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/clientes">Clientes</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h1>Editar Carro</h1>
        <form action="/carros/update/<?= $carro['id'] ?>" method="post">
    <div class="form-group">
        <label for="marca">Marca</label>
        <input type="text" class="form-control" id="marca" name="marca" value="<?= htmlspecialchars($carro['marca']) ?>" required>
    </div>
    <div class="form-group">
        <label for="modelo">Modelo</label>
        <input type="text" class="form-control" id="modelo" name="modelo" value="<?= htmlspecialchars($carro['modelo']) ?>" required>
    </div>
    <div class="form-group">
        <label for="ano">Ano</label>
        <input type="text" class="form-control" id="ano" name="ano" value="<?= htmlspecialchars($carro['ano']) ?>" required>
    </div>
    <div class="form-group">
        <label for="cor">Cor</label>
        <input type="text" class="form-control" id="cor" name="cor" value="<?= htmlspecialchars($carro['cor']) ?>" required>
    </div>
    <div class="form-group">
        <label for="placa">Placa</label>
        <input type="text" class="form-control" id="placa" name="placa" value="<?= htmlspecialchars($carro['placa']) ?>" required>
    </div>
    <div class="form-group">
        <label for="preco_aluguel">Preço do Aluguel</label>
        <input type="text" class="form-control" id="preco_aluguel" name="preco_aluguel" value="<?= htmlspecialchars($carro['preco_aluguel']) ?>" required>
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <input type="text" class="form-control" id="status" name="status" value="<?= htmlspecialchars($carro['status']) ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
</form>

    
</body>
</html>