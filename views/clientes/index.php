<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Clientes</title>
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

                <a href="/clientes/delete/<?= $cliente['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a> 

            </td> 

        </tr> 

        <?php endforeach; ?> 

    </tbody> 

</table> 
    
</body>
</html>