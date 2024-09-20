<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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