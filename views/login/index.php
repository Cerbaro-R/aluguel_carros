<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - AutoAdmin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/css.css">
</head>
<body id="pageLogin">
    <div class="login-container">
        <img src="../public/images/AutoAdminLogo.webp" alt="AutoAdmin Logo" class="logo">
        <h2>Login</h2>

        <?php if (isset($error)): ?>
            <div class="alert alert-danger" role="alert">
                <?= $error ?>
            </div>
        <?php endif; ?>

        <form action="/login" method="post" class="mt-4">
            <div class="mb-3">
                <label for="user" class="form-label">Usuário</label>
                <select id="user_id" name="user_id" class="form-control">
                    <?php foreach ($users as $user): ?>
                        <option value="<?= $user->id ?>"><?=($user->nome) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Lembrar-me</label>
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
        <div class="forgot-password">
            <a href="#">Esqueceu a senha?</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
