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
    <h1>Cadastrar Novo Carro</h1>
    <form action="/carros/store" method="post">
        <label>Marca</label>
        <input type="text" name="marca" required><br><br>
        <label>Modelo</label>
        <input type="text" name="modelo" required><br><br>
        <label>Ano</label>
        <input type="text" name="ano" required><br><br>
        <label>Cor</label>
        <input type="text" name="cor" required><br><br>
        <label>Placa</label>
        <input type="text" name="placa" required><br><br>
        <label>Preço do Aluguel</label>
        <input type="number" step="0.01" name="preco_aluguel" required><br><br>
        <button type="submit">Cadastrar Carro</button>
    </form>
</body>
</html>