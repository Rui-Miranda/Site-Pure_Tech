<?php
    //O utilizador ao tentar entrar na página terá de fazer login
  include("protect.php");

    // Inicia a sessão no início do script
    if (session_status() == PHP_SESSION_NONE) {
    session_start();
    }
?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/tickets.css">

        <title>Tickets | Pure_Tech</title>
    </head>

    <body>
        <header> <!-- Cabeçalho -->
            <!--Logotipo-->
            <div class="logo">
                <a href="home.php">Pure💻Tech</a>
            </div>
    
            <!--Botões do cabeçalho-->
            <nav>
                <ul>
                    <?php echo $_SESSION["username"]; //Aparecimento do nome do utilizador ?>    
                    <li> | </li>
                    <li><a href="logout.php">Logout</a></li>
                    <li><a href="Suporte.php">Suporte</a></li>
                </ul>
            </nav>
        </header>

        <main> <!--Contéudo-->
            <div class="container">
                <div class="row">
                    <div class="form-container">
                        <div class="card">
                            <h2>Consulta de tickets</h2>
                            <div class="card-body">
                                <div class="form-group bg-light">
                                    <div class="form-group">
                                        <?php include("ticket_consulta.php"); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer> <!-- Rodapé -->
            <p>&copy; 2024 Pure💻Tech.</p>
        </footer>
    </body>
</html>
    