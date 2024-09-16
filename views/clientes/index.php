<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Clientes</title>
</head>
<body>
    
<h1>Lista de Clientes</h1> 

<a href="/clientes/create">Cadastrar Novo Cliente</a> 

<table> 

    <thead> 

        <tr> 

            <th>Nome</th> 

            <th>CPF</th> 

            <th>Telefone</th> 

            <th>E-mail</th> 

            <th>Ações</th> 

        </tr> 

    </thead> 

    <tbody> 

        <?php foreach($clientes as $cliente): ?> 

        <tr> 

            <td><?= htmlspecialchars($cliente['nome']) ?></td> 

            <td><?= htmlspecialchars($cliente['cpf']) ?></td> 

            <td><?= htmlspecialchars($cliente['telefone']) ?></td> 

            <td><?= htmlspecialchars($cliente['email']) ?></td> 

            <td> 

                <a href="/clientes/edit/<?= $cliente['id'] ?>">Editar</a> | 

                <a href="/clientes/delete/<?= $cliente['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a> 

            </td> 

        </tr> 

        <?php endforeach; ?> 

    </tbody> 

</table> 
    
</body>
</html>