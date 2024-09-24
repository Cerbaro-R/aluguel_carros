<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Carros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #A8E6CF; /* Cor de fundo verde claro pastel */
        }
        h1 {
            color: #004080; /* Título azul escuro */
        }
        .btn-success {
            background-color: #28a745; /* Verde para o botão Adicionar Carro */
            border: none; /* Remove a borda do botão */
            padding: 10px 20px; /* Ajuste do padding */
        }
        .btn-success:hover {
            background-color: #218838; /* Verde escuro no hover */
        }
        .table {
            border-radius: 10px; /* Arredonda as bordas da tabela */
            overflow: hidden; /* Para aplicar o arredondamento */
        }
        .table th, .table td {
            vertical-align: middle; /* Centraliza verticalmente o conteúdo da tabela */
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

    <div class="container mt-4">
        <h1 class="mb-4">Lista de Carros</h1>
        <div class="mb-3">
            <a href="/carros/create" class="btn btn-success">Adicionar Carro</a>
        </div>

        <table class="table table-striped table-hover table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Ano</th>
                    <th>Cor</th>
                    <th>Placa</th>
                    <th>Preço do Aluguel</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($carros as $carro): ?>
                <tr>
                    <td><?= htmlspecialchars($carro->marca) ?></td>
                    <td><?= htmlspecialchars($carro->modelo) ?></td>
                    <td><?= htmlspecialchars($carro->ano) ?></td>
                    <td><?= htmlspecialchars($carro->cor) ?></td>
                    <td><?= htmlspecialchars($carro->placa) ?></td>
                    <td><?= htmlspecialchars($carro->preco_aluguel) ?></td>
                    <td><?= htmlspecialchars($carro->status) ?></td>
                    <td>
                        <a href="/carros/edit/<?= $carro->id ?>" class="btn btn-warning btn-sm">Editar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
