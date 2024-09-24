<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Novo Carro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #A8E6CF; /* Verde claro pastel */
        }
        .form-container {
            background-color: white; /* Fundo branco para o formulário */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #004080; /* Título azul escuro */
        }
        .form-control {
            border: 1px solid black; /* Borda preta */
            transition: border-color 0.3s; /* Transição suave para a mudança de cor */
        }
        .form-control:focus {
            border-color: black; /* Mantém a borda preta ao focar */
            box-shadow: 0 0 0.25rem rgba(0, 0, 0, 0.25); /* Leve sombra ao focar */
        }
        .btn-primary {
            background-color: #0066cc; /* Azul mais vivo para o botão */
            border-color: #0066cc;
        }
        .btn-primary:hover {
            background-color: #0052a3; /* Azul escuro no hover */
        }
    </style>
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

    <div class="container mt-4 form-container">
        <h1>Cadastrar Novo Carro</h1>
        <form action="/carros/store" method="post" class="mt-4">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="marca" class="form-label">Marca</label>
                    <input type="text" class="form-control" id="marca" name="marca" required>
                </div>
                <div class="col-md-6">
                    <label for="modelo" class="form-label">Modelo</label>
                    <input type="text" class="form-control" id="modelo" name="modelo" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="ano" class="form-label">Ano</label>
                    <input type="text" class="form-control" id="ano" name="ano" required>
                </div>
                <div class="col-md-4">
                    <label for="cor" class="form-label">Cor</label>
                    <input type="text" class="form-control" id="cor" name="cor" required>
                </div>
                <div class="col-md-4">
                    <label for="placa" class="form-label">Placa</label>
                    <input type="text" class="form-control" id="placa" name="placa" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="preco_aluguel" class="form-label">Preço do Aluguel</label>
                    <input type="number" class="form-control" step="0.01" id="preco_aluguel" name="preco_aluguel" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar Carro</button>
        </form>
    </div>
</body>
</html>
