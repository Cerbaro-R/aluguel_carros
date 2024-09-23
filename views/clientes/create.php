<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Cadastro Clientes</title>
</head>
<body>
    
<h1>Cadastrar Novo Cliente</h1> 

<form action="/clientes/criar" method="POST"> 

    <label>Nome:</label> 

    <input type="text" name="nome" required><br><br>

 

    <label>CPF:</label> 

    <input type="text" name="cpf" required><br><br>

 

    <label>Telefone:</label> 

    <input type="text" name="telefone" required><br><br>

 

    <label>E-mail:</label> 

    <input type="email" name="email" required><br><br>

 

    <label>Endereço:</label> 

    <textarea name="endereco" required></textarea><br><br>

 

    <button type="submit">Cadastrar Cliente</button>

</form> 
    
</body>
</html>