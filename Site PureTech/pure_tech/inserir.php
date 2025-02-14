<?php
    // Inicia uma sessão ou retoma a sessão já existente
    if (session_status() == PHP_SESSION_NONE){
        session_start();
    }

    // Verificar se algum utilizador está logado; se não está, então redireciona para a página de autenticação
    if ((!isset($_SESSION['user_id'])) || ($_SESSION['user_id']==FALSE)){
        header("Location: index.php");
        exit();
    }

    include("conexao.php");// Conecta à base de dados
    $conn = new mysqli($servername, $username, $password, $db);

    // Verifique a conexão
    if ($conn->connect_error){
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Verificar se o formulário de envio foi submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        // Reunir os dados do formulário
        $user_id = $_SESSION["user_id"];
        $titulo = $_POST["titulo"];
        $categoria = $_POST["categoria"];
        $descricao = $_POST["descricao"];

        // Inserir o ticket na base de dados (usando prepared statement)
        $sql = "INSERT INTO tickets (user_id, titulo, categoria, descricao) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("isss", $user_id, $titulo, $categoria, $descricao);
        
        if ($stmt->execute()) {
            $stmt->close();
          
            $_SESSION["registo_inserido"]="Registo inserido com sucesso!";
            
        } else {
            echo "Erro ao inserir o ticket: " . $stmt->error;
        }
        
    }
 
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
        if (isset($_SESSION['registo_inserido'])) {
            echo "<p>" . $_SESSION['registo_inserido'] . "</p>";
            unset($_SESSION['registo_inserido']); // Limpa a mensagem após exibi-la
               // Feche a conexão com o banco de dados
            $conn->close();
            }
        ?>
        
        <div class="col-6">
            <a href="tickets.php"><button class="btn btn-lg btn-warning btn-block">Verificar</button></a>
        </div>
    </body>
</html>