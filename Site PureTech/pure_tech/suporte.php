<?php
    //O utilizador ao tentar entrar na página terá de fazer login
    include("protect.php");

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
        <link rel="stylesheet" href="css/suporte.css">
        <title>Suporte | Pure_Tech</title>
    </head>

    <body onload="registoInseridoSucesso()">
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
                    <li><a href="tickets.php">Tickets</a></li>
                </ul>
            </nav>
        </header>
        
        <main> <!--Contéudo-->
            <div class="form-container">    
                <h2>Abertura de Ticket</h2>
                <form action="inserir.php" method="post">
                    <div class="form-group">
                        <label>Título</label>
                        <input name="titulo" type="text" class="form-control" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label>Categoria</label>  <!-- Criação de uma lista de opções a apresentar ao utilizador-->
                        <select name="categoria" class="form-control">
                            <option>Alterar Password</option>
                            <option>Compra de Produto</option>
                            <option>Outros assuntos</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Descrição</label>
                        <textarea name="descricao" class="form-control" rows="3" required></textarea>
                    </div>

                    <div class="row mt-5">
                        <div class="col-6">
                            <button class="btn-primary" type="submit">Abrir</button>
                        </div>
                        <div class="col-6">
                            <button class="btn-secondary" type="reset" value="Limpar">Limpar</button>
                        </div>
                    </div>
                </form>
            </div>
        </main>
        
        <footer> <!-- Rodapé -->
            <p>&copy; 2024 Pure💻Tech.</p>
        </footer>
    </body>
</html>