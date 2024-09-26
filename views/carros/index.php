<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Carros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
        .navbar {
            background-color: #E0F7EF;
        }

        .btn-success {
            background-color: #A8E6CF;
            border: none;
        }

        .btn-success:hover {
            background-color: #94D4B6;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #F8F8F8;
        }

        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
        }

        .status-active {
            background-color: #A8E6CF;
            color: white;
            padding: 0.25em 0.5em;
            border-radius: 5px;
            font-weight: bold;
        }

        .status-inactive {
            background-color: #FF8A80;
            color: white;
            padding: 0.25em 0.5em;
            border-radius: 5px;
            font-weight: bold;
        }

        .navbar-second {
            margin-top: 10px;
            background-color: #D4EDE5; /* Fundo mais escuro que a tabela */
            border-bottom: 1px solid #ddd;
        }

        .navbar-second .btn {
            margin-right: auto; /* Alinha à esquerda */
        }
    </style>
</head>
<body>
    <!-- Primeira Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
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

    <!-- Segunda Navbar -->
    <nav class="navbar navbar-second d-flex">
        <div class="container-fluid">
            <a href="/carros/create" class="btn btn-success">Adicionar Carro</a>
        </div>
    </nav>

    <div class="container mt-4">
        <table class="table table-striped table-hover table-bordered">
            <thead>
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
