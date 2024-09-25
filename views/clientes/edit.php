<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Cadastro Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
        /* Estilo personalizado */
        body {
            background-color: #f8f9fa; /* Cor de fundo suave */
        }

        h1 {
            font-family: 'Arial', sans-serif;
            font-weight: bold;
            color: #007bff; /* Cor azul Bootstrap */
            margin-bottom: 30px;
        }

        form {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Efeito de sombra */
        }

        label {
            font-weight: bold;
            color: #343a40; /* Cor do texto das labels */
        }

        input, textarea {
            border: 1px solid #ced4da;
            border-radius: 5px;
            padding: 10px;
        }

        input:focus, textarea:focus {
            border-color: #80bdff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.25); /* Efeito de foco azul */
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            padding: 10px 20px;
            font-size: 16px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .container {
            max-width: 600px; /* Largura máxima para o formulário */
            margin: auto;
            margin-top: 50px;
        }

        .navbar {
            margin-bottom: 50px;
        }

        textarea {
            resize: none; /* Impede o redimensionamento do textarea */
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
    
    <div class="container">
        <h1 class="text-center">Editar Cliente</h1>

        <form action="/clientes/editar/<?php echo $cliente['id']; ?>" method="POST">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" id="nome" name="nome" class="form-control" value="<?php echo ($cliente['nome']); ?>" required>
            </div>

            <div class="mb-3">
                <label for="cpf" class="form-label">CPF:</label>
                <input type="text" id="cpf" name="cpf" class="form-control" value="<?php echo ($cliente['cpf']); ?>" required>
            </div>

            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone:</label>
                <input type="text" id="telefone" name="telefone" class="form-control" value="<?php echo ($cliente['telefone']); ?>" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail:</label>
                <input type="email" id="email" name="email" class="form-control" value="<?php echo ($cliente['email']); ?>" required>
            </div>

            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço:</label>
                <textarea id="endereco" name="endereco" class="form-control" rows="3" value="<?php echo ($cliente['endereco']); ?>" required></textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Atualizar Cliente</button>
            </div>
        </form>
    </div>

</body>
</html>