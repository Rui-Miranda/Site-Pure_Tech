<?php
    //Inclusão dos atributos da página protect.php
    include("conexao.php"); 

?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/criacaolog.css">
        <title>Registo | Pure_Tech</title>
    </head>

    <body>
        <header> <!-- Cabeçalho -->
            <!-- Logotipo -->
            <div class="logo">
                <a href="index.php">Pure💻Tech</a>
            </div>
        </header>

        <main>
       
            <!-- Formulário de Registo -->
            <form action="validaregisto.php" method="POST">
                <div class="card-body"> 
                    <h1>Registar</h1>

                    <!-- Nome de Utilizador -->
                    <div class="form-group">
                        <input type="text" class="input-field" name="username" placeholder="Nome de utilizador" required>
                    </div>
                    <!-- E-mail -->
                    <div class="form-group">
                        <input type="email" class="input-field" name="email" placeholder="E-mail" required>
                    </div>
                    <!-- Senha -->
                    <div class="form-group">
                        <input type="password" class="input-field" name="password" placeholder="Senha" required>
                    </div>
                    <!-- Botão para Criar Conta -->
                    <button type="submit" class="register-btn">Criar Conta</button>
                </div>
            </form>
        </main>

        <footer> <!-- Rodapé -->
        <p>&copy; 2024 Pure💻Tech.</p>
        </footer>
    </body>
</html>
