<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/comum.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Project_0</title>
</head>
<body>
    <div class="comun"></div>
    <div class="privat">
        <form class="form-login" action="#" method="post" autocomplete="off">
            <div class="login-card card">
                <div class="card-header">
                    <span class="font-weight-light">project0 MONOLÍTICO</span>           
                </div>
                <div class="card-body">
                    <?php include(TEMPLATE_PATH . '/messages.php')  ?>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" 
                            class="form-control <?= $errors['email'] ? 'is-invalid' : '' ?>" 
                            value="<?= count($_POST) > 0 ? $email : '' ?>"
                            placeholder="Informe o e-mail" autofocus>
                        <div class="invalid-feedback">
                            <?= $errors['email'] ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input type="password" id="password" name="password" 
                            class="form-control <?= $errors['password'] ? 'is-invalid' : '' ?>" 
                            placeholder="Informe a senha" autofocus>
                        <div class="invalid-feedback">
                            <?= $errors['password'] ?>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                        <button class="btn btn-lg btn-primary" name="btnEntrar">Entrar</button>
                </div>
            </div>
        </form>
    </div>

</body>
</html>