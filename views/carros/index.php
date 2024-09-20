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
    <h1>Lista de Carros</h1>
    <a href="/carros/create">Adicionar Carro</a>
    <table>
        <thread>
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Ano</th>
                <th>Cor</th>
                <th>Placa</th>
                <th>Preço do Aluguel</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thread>
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
                        <a href="/carros/edit/<?= $carro['id'] ?>">Editar</a>
                        <a href="/carros/delete/<?= $carro['id'] ?>"onclick="return confirm('Tem certeza que deseja excluír ?')">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>