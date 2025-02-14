<?php
  //Inclusão dos atributos da página conexao.php
  include("conexao.php");

  // Inicia uma sessão ou retoma a sessão já existente
  if (session_status() == PHP_SESSION_NONE) {
  session_start();
  }
?>

<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Pure_Tech</title>
  </head>

  <body>
    <header>
      <div class="logo">
        <a href="index.php">Pure💻Tech</a>
      </div>
    </header>

    <main>
      <div class="card-body"> 
        <form action="" method="post">
          <h1>Login</h1>
          <div style="color: red; text-align: center;"> 
            <?php
              // Garante que o código só será executado quando o formulário for enviado
              if ($_SERVER['REQUEST_METHOD'] === 'POST') {

              // Obtém o e-mail enviado pelo formulário, ou uma string vazia caso não esteja definido
              // A função trim() remove espaços em branco no início e no final da string
              $email = isset($_POST['email']) ? trim($_POST['email']) : '';

              // Obtém a senha enviada pelo formulário, ou uma string vazia caso não esteja definida
              $password = isset($_POST['password']) ? trim($_POST['password']) : '';

              // Verifica se o campo de e-mail está vazio
              if (empty($email)) {
                echo "Preencha seu e-mail."; // Mensagem de erro caso o e-mail não seja preenchido
              }
                // Verifica se o campo de senha está vazio
                elseif (empty($password)) {
                  echo "Preencha sua senha."; // Mensagem de erro caso a senha não seja preenchida
                } 
                // Caso ambos os campos estejam preenchidos, continua com a validação
                else {
                

                // Transforma a senhaMD5
                $password = md5($mysqli->real_escape_string($password));

                // Monta o código SQL para verificar se o e-mail e senha existem no banco
                $sql_code = "SELECT * FROM utilizadores WHERE email = '$email' AND password = '$password'";

                // Executa a consulta SQL e, em caso de erro, interrompe o script exibindo uma mensagem
                $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

                // Verifica se a consulta retornou exatamente 1 linha (usuário encontrado)
                if ($sql_query->num_rows === 1) {
                    // Obtém os dados do usuário retornados pela consulta
                    $utilizadores = $sql_query->fetch_assoc();

                    // Salva os dados do usuário na sessão para manter o login ativo
                    $_SESSION['user_id'] = $utilizadores['user_id'];
                    $_SESSION['username'] = $utilizadores['username'];

                    // Redireciona o usuário para a página inicial após o login bem-sucedido
                    header("Location: home.php");
                    exit; // Garante que o restante do script não será executado após o redirecionamento
                  } else {
                    // Mensagem de erro caso e-mail ou senha estejam incorretos
                    echo "Falha ao fazer login! E-mail ou senha incorretos.";
                  }
                }
              }
            ?>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="E-mail" name="email" required>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Senha" name="password" required>
          </div>
          <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
          <input class="btn btn-lg btn-info btn-block" type="reset" value="Limpar">
        </form>
        <a href="registo.php"><p>Crie aqui a sua conta</p></a>
      </div>
    </main>

    <footer>
      <p>&copy; 2024 Pure💻Tech.</p>
    </footer>
  </body>
</html>