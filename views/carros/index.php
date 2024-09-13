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
                    <td><?= htmlospecialchars($carro->marca) ?></td>
                    <td><?= htmlospecialchars($carro->modelo) ?></td>
                    <td><?= htmlospecialchars($carro->ano) ?></td>
                    <td><?= htmlospecialchars($carro->cor) ?></td>
                    <td><?= htmlospecialchars($carro->placa) ?></td>
                    <td><?= htmlospecialchars($carro->preco_aluguel) ?></td>
                    <td><?= htmlospecialchars($carro['status'])=='alugado' ? 'Alugado' : 'Disponível' ?></td>
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