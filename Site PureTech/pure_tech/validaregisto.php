<?php
    include("conexao.php");
    session_start(); // Iniciar sessão

    // Obtenha os dados enviados pelo formulário
    $nome = htmlspecialchars($_POST["username"]);
    $senha = htmlspecialchars($_POST["password"]);
    $senha = md5($senha);
    $email = htmlspecialchars($_POST["email"]);
   
    // Verificar se o nome de usuário contém espaços
    if (strpos($nome, ' ') !== false) {
        echo "O nome de usuário não pode conter espaços.";
        exit();
    }

    // Verificar se o endereço já existe no banco de dados
    $stmt_check_email = $mysqli->prepare("SELECT * FROM utilizadores WHERE email = ?");
    $stmt_check_email->bind_param("s", $email);
    $stmt_check_email->execute();
    $resultemail = $stmt_check_email->get_result();

    // Verificar se o login já existe no banco de dados
    $stmt_check_login = $mysqli->prepare("SELECT * FROM utilizadores WHERE username = ?");
    $stmt_check_login->bind_param("s", $nome);
    $stmt_check_login->execute();
    $resultlogin = $stmt_check_login->get_result();
?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Pure_Tech | Confirmação</title>
        </head>
        <body>    
            <?php
                // Exibir mensagem de erro para casos duplicados
                if ($resultlogin->num_rows > 0) {
                    echo "O nome do utilizador já se encontra registado! ";
                    if ($resultemail->num_rows > 0) {
                        echo "O endereço de email já se encontra registado!";
                    }
                } 
                else {
    
                    // Inserir na base de dados o novo usuário
                    $stmt_insert = $mysqli->prepare("INSERT INTO utilizadores (username, password, email) VALUES (?, ?, ?)");
                    $stmt_insert->bind_param("sss", $nome, $senha, $email);

                    if ($stmt_insert->execute()) {
                    // Recuperar o ID do usuário recém-criado
                    $ID = $mysqli->insert_id;

                    // Armazenar os dados do usuário na sessão
                    $_SESSION["user_id"] = $ID;
                    $_SESSION["username"] = $nome;
                    $_SESSION["email"] = $email;
                    $_SESSION["password"] = $senha;

                    // Redirecionar o usuário para a página inicial já logado
                    header("Location: index.php");
                    exit();
                    } else {
                    echo "Erro ao registar o utilizador.";
                    }
                }
            ?>
            <p><a href="registo.php"><button class="btn btn-lg btn-warning btn-block">Voltar</button></a></p>
        </body>
    </html>
