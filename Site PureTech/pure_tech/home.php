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
        <link rel="stylesheet" href="css/home.css">
        <title>Home | Pure_Tech</title>
    </head>

    <body>
        <header> <!-- Cabaçalho -->
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
                    <li><a href="suporte.php">Suporte</a></li>
                    <li><a href="suporte.php">Carrinho</a></li>
                </ul>
            </nav>
        </header>
    
        <section class="intro"> <!--Secção de Introdução-->
            <h1>Bem-vindo à Nossa Loja</h1>
            <p>Os melhores produtos ao melhor preço.</p>
            <a href="produtos.php" class="btn">Ver Produtos</a>
        </section>

        <main> <!--Contéudo-->
            <h1 style="text-align:center;">Produtos em destaque</h1>
            <section id="produtos" class="product-list">
                <div class="product">
                    <img src="produtos/produto_2.jpg" alt="Dell XPS 13">
                    <h3>Dell XPS 13</h3>
                    <span class="price">€443.81</span>
                    <button class="btn">Adicionar ao carrinho</button>
                </div>
                <div class="product">
                    <img src="produtos/produto_5.jpg" alt="Dell Inspiron 14">
                    <h3>Dell Inspiration 14</h3>
                    <span class="price">€711.67</span>
                    <button class="btn">Adicionar ao carrinho</button>
                </div>
                <div class="product">
                    <img src="produtos/produto_1.jpg" alt="MacBook Air M2">
                    <h3>Macbook Air M2</h3>
                    <span class="price">€893.53</span>
                    <button class="btn">Adicionar ao carrinho</button></a>
                </div>
            </section>
        </main>

        <footer> <!-- Rodapé -->
            <p>&copy; 2024 Pure💻Tech.</p>
        </footer>
    </body>
</html>