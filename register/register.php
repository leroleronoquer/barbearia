<!DOCTYPE php>

<php>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Registro</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="../styles/register.css">


    </head>

    <body>
        <div class="container container1">
            <form action="../scripts/register-process-data.php" method="post" class="form-register" id="form">
                <div class="form-field">
                    <div class="register-text"><label>Nome</label></div>
                    <input name="name" type="text" class="register-input required" id="register-name" placeholder="Nome"
                        oninput="nameValidate()">
                    <div class="start"><span class="span-required">Digite um nome válido</span></div>
                </div>
                <div class="form-field">
                    <div class="register-text"><label>Email</label></div>
                    <input name="email" type="email" class="register-input required" id="register-email"
                        placeholder="email@gmail.com" oninput="emailValidate()">
                    <div class="start"><span class="span-required">Digite um email válido</span></div>
                </div>

                <div class="form-field">
                    <div class="register-text"><label>Senha</label></div>
                    <input name="password" type="password" class="register-input required" id="register-senha"
                        placeholder="Senha" oninput="mainPasswordValidate()">
                    <div class="start"><span class="span-required">A senha deve conter pelo menos 8 digitos</span></div>
                </div>

                <div class="form-field">
                    <div class="register-text"><label>Confirmar senha</label></div>
                    <input type="password" class="register-input required" id="register-confirma"
                        placeholder="Confirmar senha" oninput="comparePassword()">
                    <div class="start"><span class="span-required">Senhas devem ser compatíveis</span></div>

                </div>
                <div class="form-field">
                    <button type="submit"
                        class="register-button solid rounded button-register-transition">Registrar</button>
                </div>
                <div class="form-field">
                    <div class="go-to-login">
                        <button type="button" class="clear rounded button-go-to-login-transition"
                            onclick="window.location.href='../login/login.php'">Já tem uma conta? Ir para login</button>
                    </div>
                </div>
            </form>

        </div>
        <script src="../scripts/register.js"></script>
    </body>

</php>