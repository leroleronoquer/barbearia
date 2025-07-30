<!DOCTYPE php>

<php>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="../styles/login.css">

    </head>

    <body>

        <div class="container container1">
            <form action="../scripts/login-process-data.php" method="post" class="form-login" id="form">

                <div class="form-field">
                    <div class="login-text"><label>Email</label></div>
                    <input name="email" type="email" class="login-input required" id="login-email"
                        placeholder="email@gmail.com" oninput="emailValidate()">
                    <div class="start"><span class="span-required">Digite um email válido</span></div>
                </div>

                <div class="form-field">
                    <div class="login-text"><label>Senha</label></div>
                    <input name="password" type="password" class="login-input required" id="login-senha"
                        placeholder="Senha" oninput="mainPasswordValidate()">
                    <div class="start"><span class="span-required">A senha deve conter pelo menos 8 digitos</span></div>
                </div>


                <div class="form-field">
                    <button type="submit" class="login-button solid rounded button-login-transition">Entrar</button>
                </div>
                <div class="form-field">
                    <div class="go-to-register">
                        <button type="button" class="clear rounded button-go-to-login-transition"
                            onclick="window.location.href='../register/register.php'">Não tem uma conta?
                            Registrar</button>
                    </div>
                </div>
            </form>

    </body>
</php>