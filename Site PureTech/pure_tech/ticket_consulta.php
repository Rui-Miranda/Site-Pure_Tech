<?php
    if (session_status() == PHP_SESSION_NONE){// Inicia uma sessão ou retoma a sessão já existente
        session_start();
    }

    // Verrificar se algum utilizador está logado; se não está, então redireciona para a página de autenticação
    if ((!isset($_SESSION['user_id'])) || ($_SESSION['user_id']==FALSE)){
        header("Location: index.php");
        exit();
    }

    include("conexao.php");// Conecta ao banco de dados
    $conn = new mysqli($servername, $username, $password, $db);
   
     // Verifique a conexão
    if ($conn->connect_error){
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Consulta para listar os tickets do utilizador autenticado
    $user_id = $_SESSION['user_id'];
    $query = "SELECT * FROM tickets WHERE user_id = $user_id";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Exibe os tickets numa tabela
        echo "<table border=1>";
        echo "<tr><th>Nº do Ticket</th><th>Título</th><th>Categoria</th><th>Descrição</th><th>Data de Inserção</th><th>Estado</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["ticket_id"] . "</td>";
            echo "<td>" . $row["titulo"] . "</td>";
            echo "<td>" . $row["categoria"] . "</td>";
            echo "<td>" . $row["descricao"] . "</td>";
            echo "<td>" . $row["data_insercao"] . "</td>";
            echo "<td>" . $row["estado"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Este utilizador não tem tickets criados.";
    }

    // Feche a conexão com o banco de dados
    $conn->close();
?>