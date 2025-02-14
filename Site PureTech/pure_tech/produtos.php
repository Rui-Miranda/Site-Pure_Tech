<?php
    //Inclusão dos atributos da página protect.php
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
        <link rel="stylesheet" href="css/produtos.css">
        <title>Produtos | Pure_Tech</title>
        
    </head>

    <body>
    
        <header> <!-- Cabeçalho-->
            <!--Logotipo-->       
            <div class="logo">
                <a href="home.php">Pure💻Tech</a>
            </div>
        
           <!--Botões do cabeçalho-->
            <nav>
                <ul>
                    <?php echo $_SESSION["username"]; //Aparecimento do nome do utilizador?>    
                    <li> | </li>
                    <li><a href="logout.php">Logout</a></li>
                    <li><a href="suporte.php">Suporte</a></li>
                    <li><a href="suporte.php">Carrinho</a></li>
                </ul>
            </nav>
        </header>

        <main> <!--Contéudo-->
            <div class="container">
                <div class="laptop-grid">
                
                    <!-- Laptop 1 -->
                    <div class="laptop-item">
                        <img src="produtos/produto_1.jpg" alt="MacBook Air M2">
                        <div class="laptop-details">
                            <a href="#" onclick="openModal('macbook-air-m2')"><h3>MacBook Air M2</h3></a>
                            <p>O MacBook Air, equipado com um processador M2, oferece um desempenho incrível, uma grande duração de bateria e um design elegante."</p>
                            <span class="price">€443.81</span>
                            <div class="product">
                                <button class="btn">Adicionar ao carrinho</button>
                            </div>                  
                        </div>
                    </div>

                    <!-- Laptop 2 -->
                    <div class="laptop-item">
                        <img src="produtos/produto_2.jpg" alt="Dell XPS 13">
                        <div class="laptop-details">
                            <a href="#" onclick="openModal('dell-xps-13')"><h3>Dell XPS 13</h3></a>
                            <p>O Dell XPS 13 combina um ecrã deslumbrante com um desempenho robusto, tudo num formato compacto e sofisticado.</p>
                            <span class="price">€443.81</span>
                            <div class="product">
                                <button class="btn">Adicionar ao carrinho</button>
                            </div>  
                        </div>
                    </div>

                    <!-- Laptop 3 -->
                    <div class="laptop-item">
                        <img src="produtos/produto_3.jpg" alt="Samsung Galaxy Book3 Ultra">
                        <div class="laptop-details">
                            <a href="#" onclick="openModal('samsung-galaxy-book3-ultra')"><h3>Samsung Galaxy Book3 Ultra</h3></a>
                            <p>O Galaxy Book3 Ultra oferece um desempenho poderoso aliado a um deslumbrante ecrã AMOLED, tornando-o ideal para utilizações multimédia.</p>
                            <span class="price">€443.81</span>
                            <div class="product">
                                <button class="btn">Adicionar ao carrinho</button>
                            </div>  
                        </div>
                    </div>

                    <!-- Laptop 4 -->
                    <div class="laptop-item">
                        <img src="produtos/produto_4.jpg" alt="ASUS ROG Zephyrus G14">
                        <div class="laptop-details">
                            <a href="#" onclick="openModal('asus-rog-zephyrus-g14')"><h3>ASUS ROG Zephyrus G14</h3></a>
                            <p>Conhecido pela sua alta performence em jogos, o Zephyrus G14 combina especificações de topo com um design compacto e elegante.</p>
                            <span class="price">€443.81</span>
                            <div class="product">
                                <button class="btn">Adicionar ao carrinho</button>
                            </div>  
                        </div>
                    </div>

                    <!-- Laptop 5 -->
                    <div class="laptop-item">
                        <img src="produtos/produto_5.jpg" alt="Dell Inspiron 14">
                        <div class="laptop-details">
                            <a href="#" onclick="openModal('dell-inspiron-14')"><h3>Dell Inspiron 14</h3></a>
                            <p>O Inspiron 14 proporciona um equilíbrio perfeito entre desempenho e acessibilidade, sendo ideal para tarefas do dia a dia e jogos leves.</p>
                            <span class="price">€443.81</span>
                            <div class="product">
                                <button class="btn">Adicionar ao carrinho</button>
                            </div>  
                        </div>
                    </div>

                    <!-- Laptop 6 -->
                    <div class="laptop-item">
                        <img src="produtos/produto_6.jpg" alt="MacBook Pro 16">
                        <div class="laptop-details">
                            <a href="#" onclick="openModal('macbook-pro-16')"><h3>MacBook Pro 16</h3></a>
                            <p>O MacBook Pro 16 oferece um desempenho incomparável e apresenta um amplo ecrã Retina, ideal para utilizações profissionais.</p>
                            <span class="price">€443.81</span>
                            <div class="product">
                                <button class="btn">Adicionar ao carrinho</button>
                            </div>  
                        </div>
                    </div>

                    <!-- Laptop 7 -->
                    <div class="laptop-item">
                        <img src="produtos/produto_7.jpg" alt="Lenovo ThinkPad X1 Carbon">
                        <div class="laptop-details">
                            <a href="#" onclick="openModal('lenovo-thinkpad-x1-carbon')"><h3>Lenovo ThinkPad X1 Carbon</h3></a>
                            <p>O ThinkPad X1 Carbon é reconhecido pela sua durabilidade e desempenho poderoso, tornando-se a escolha ideal para profissionais de negócios.</p>
                            <span class="price">€443.81</span>
                            <div class="product">
                                <button class="btn">Adicionar ao carrinho</button>
                            </div>  
                        </div>
                    </div>

                    <!-- Laptop 8 -->
                    <div class="laptop-item">
                        <img src="produtos/produto_8.jpg" alt="HP Envy 15">
                        <div class="laptop-details">
                            <a href="#" onclick="openModal('hp-envy-15')"><h3>HP Envy 15</h3></a>
                            <p>O HP Envy 15 combina um desempenho elevado com um design elegante, tornando-o uma excelente escolha tanto para trabalho como para lazer.</p>
                            <span class="price">€443.81</span>
                            <div class="product">
                                <button class="btn">Adicionar ao carrinho</button>
                            </div>  
                        </div>
                    </div>

                    <!-- Laptop 9 -->
                    <div class="laptop-item">
                        <img src="produtos/produto_9.jpg" alt="ASUS TUF Gaming A15">
                        <div class="laptop-details">
                            <a href="#" onclick="openModal('asus-tuf-gaming-a15')"><h3>ASUS TUF Gaming A15</h3></a>
                            <p>O ASUS TUF Gaming A15 foi concebido para gamers que procuram durabilidade e alto desempenho a um preço acessível.</p>
                            <span class="price">€443.81</span>
                            <div class="product">
                                <button class="btn">Adicionar ao carrinho</button>
                            </div>  
                        </div>
                    </div>

                    <!-- Laptop 10 -->
                    <div class="laptop-item">
                        <img src="produtos/produto_10.jpg" alt="Samsung Galaxy Book2 15">
                        <div class="laptop-details">
                            <a href="#" onclick="openModal('samsung-galaxy-book2-15')"><h3>Samsung Galaxy Book2 15</h3></a>
                            <p>O Galaxy Book2 15 oferece uma combinação equilibrada de desempenho e autonomia de bateria, complementada por um ecrã amplo ideal para tarefas de produtividade.</p>
                            <span class="price">€443.81</span>
                            <div class="product">
                                <button class="btn">Adicionar ao carrinho</button>
                            </div>  
                        </div>
                    </div>

                    <!-- Laptop 11 -->
                    <div class="laptop-item">
                        <img src="produtos/produto_11.jpg" alt="Acer Aspire 5">
                        <div class="laptop-details">
                            <a href="#" onclick="openModal('acer-aspire-5')"><h3>Acer Aspire 5</h3></a>
                            <p>O Acer Aspire 5 é um portátil económico que oferece um desempenho satisfatório e uma variedade de funcionalidades para o uso diário.</p>
                            <span class="price">€443.81</span>
                            <div class="product">
                                <button class="btn">Adicionar ao carrinho</button>
                            </div>  
                        </div>
                    </div>

                    <!-- Laptop 12 -->
                    <div class="laptop-item">
                        <img src="produtos/produto_12.jpg" alt="Microsoft Surface Laptop 5">
                        <div class="laptop-details">
                            <a href="#" onclick="openModal('microsoft-surface-laptop-5')"><h3>Microsoft Surface Laptop 5</h3></a>
                            <p>O Surface Laptop 5 apresenta uma construção premium, desempenho excelente e um ecrã tátil de alta resolução."</p>
                            <span class="price">€443.81</span>
                            <div class="product">
                                <button class="btn">Adicionar ao carrinho</button>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </main>
    
        <footer> <!-- Rodapé -->
            <p>&copy; 2024 Pure💻Tech.</p>
        </footer>
        
    
        <!-- Modals -->
        <!-- Laptop 1 -->
        <div id="macbook-air-m2" class="modal-container">
            <div class="modal">
                <button class="modal-close" onclick="closeModal('macbook-air-m2')">&times;</button>
                <div class="modal-content">
                    <h3>Especificações</h3>
                    <p><strong>Processador:</strong> Apple M2 chip</p>
                    <p><strong>RAM:</strong> 8GB</p>
                    <p><strong>Armazenamento:</strong> 256GB SSD</p>
                    <p><strong>Ecrã:</strong> 13.6" Retina Display</p>
                    <p><strong>Gráfica:</strong> Integrated 8-core GPU</p>
                    <p><strong>Longevidade da bateria:</strong> Até 18 horas</p>
                </div>
            </div>
        </div>

        <!-- Laptop 2 -->
        <div id="dell-xps-13" class="modal-container">
            <div class="modal">
                <button class="modal-close" onclick="closeModal('dell-xps-13')">&times;</button>
                <div class="modal-content">
                    <h3>Especificações</h3>
                    <p><strong>Processador:</strong> Intel Core i7-1360P</p>
                    <p><strong>RAM:</strong> 16GB</p>
                    <p><strong>Armazenamento:</strong> 512GB SSD</p>
                    <p><strong>Ecrã:</strong> 13.4" FHD+ InfinityEdge</p>
                    <p><strong>Gráfica:</strong> Intel Iris Xe Graphics</p>
                    <p><strong>Longevidade da bateria:</strong> Até 14 horas</p>
                </div>
            </div>
        </div>

        <!-- Laptop 3 -->
        <div id="samsung-galaxy-book3-ultra" class="modal-container">
            <div class="modal">
                <button class="modal-close" onclick="closeModal('samsung-galaxy-book3-ultra')">&times;</button>
                <div class="modal-content">
                    <h3>Especificações</h3>
                    <p><strong>Processador:</strong> Intel Core i9-13900H</p>
                    <p><strong>RAM:</strong> 32GB</p>
                    <p><strong>Armazenamento:</strong> 1TB SSD</p>
                    <p><strong>Ecrã:</strong> 16" AMOLED</p>
                    <p><strong>Gráfica:</strong> NVIDIA RTX 4070</p>
                    <p><strong>Longevidade da bateria:</strong> Até 12 horas</p>
                </div>
            </div>
        </div>

        <!-- Laptop 4 -->
        <div id="asus-rog-zephyrus-g14" class="modal-container">
            <div class="modal">
                <button class="modal-close" onclick="closeModal('asus-rog-zephyrus-g14')">&times;</button>
                <div class="modal-content">
                    <h3>Especificações</h3>
                    <p><strong>Processador:</strong> AMD Ryzen 9 7940HS</p>
                    <p><strong>RAM:</strong> 16GB</p>
                    <p><strong>Armazenamento:</strong> 512GB SSD</p>
                    <p><strong>Ecrã:</strong> 14" WQHD</p>
                    <p><strong>Gráfica:</strong> NVIDIA GeForce RTX 4060</p>
                    <p><strong>Longevidade da bateria:</strong> Até 10 horas</p>
                </div>
            </div>
        </div>

        <!-- Laptop 5 -->
        <div id="dell-inspiron-14" class="modal-container">
            <div class="modal">
                <button class="modal-close" onclick="closeModal('dell-inspiron-14')">&times;</button>
                <div class="modal-content">
                    <h3>Especificações</h3>
                    <p><strong>Processador:</strong> Intel Core i5-1235U</p>
                    <p><strong>RAM:</strong> 8GB</p>
                    <p><strong>Armazenamento:</strong> 256GB SSD</p>
                    <p><strong>Ecrã:</strong> 14" FHD</p>
                    <p><strong>Gráfica:</strong> Integrated Intel Iris Xe</p>
                    <p><strong>Longevidade da bateria:</strong> Até 8 horas</p>
                </div>
            </div>
        </div>

        <!-- Laptop 6 -->
        <div id="macbook-pro-16" class="modal-container">
            <div class="modal">
                <button class="modal-close" onclick="closeModal('macbook-pro-16')">&times;</button>
                <div class="modal-content">
                    <h3>Especificações</h3>
                    <p><strong>Processador:</strong> Apple M2 Max chip</p>
                    <p><strong>RAM:</strong> 32GB</p>
                    <p><strong>Armazenamento:</strong> 1TB SSD</p>
                    <p><strong>Ecrã:</strong> 16.2" Liquid Retina XDR</p>
                    <p><strong>Gráfica:</strong> Integrated 38-core GPU</p>
                    <p><strong>Longevidade da bateria:</strong> Até 21 horas</p>
                </div>
            </div>
        </div>

        <!-- Laptop 7 -->
        <div id="lenovo-thinkpad-x1-carbon" class="modal-container">
            <div class="modal">
                <button class="modal-close" onclick="closeModal('lenovo-thinkpad-x1-carbon')">&times;</button>
                <div class="modal-content">
                    <h3>Especificações</h3>
                    <p><strong>Processador:</strong> Intel Core i7-1365U</p>
                    <p><strong>RAM:</strong> 16GB</p>
                    <p><strong>Armazenamento:</strong> 512GB SSD</p>
                    <p><strong>Ecrã:</strong> 14" WQHD</p>
                    <p><strong>Gráfica:</strong> Integrated Intel Iris Xe</p>
                    <p><strong>Longevidade da bateria:</strong> Até 15 horas</p>
                </div>
            </div>
        </div>

        <!-- Laptop 8 -->
        <div id="hp-envy-15" class="modal-container">
            <div class="modal">
                <button class="modal-close" onclick="closeModal('hp-envy-15')">&times;</button>
                <div class="modal-content">
                    <h3>Especificações</h3>
                    <p><strong>Processador:</strong> Intel Core i7-13700H</p>
                    <p><strong>RAM:</strong> 16GB</p>
                    <p><strong>Armazenamento:</strong> 1TB SSD</p>
                    <p><strong>Ecrã:</strong> 15.6" 4K UHD</p>
                    <p><strong>Gráfica:</strong> NVIDIA GeForce GTX 1650</p>
                    <p><strong>Longevidade da bateria:</strong> Até 10 horas</p>
                </div>
            </div>
        </div>

        <!-- Laptop 9 -->
        <div id="asus-tuf-gaming-a15" class="modal-container">
            <div class="modal">
                <button class="modal-close" onclick="closeModal('asus-tuf-gaming-a15')">&times;</button>
                <div class="modal-content">
                    <h3>Especificações</h3>
                    <p><strong>Processador:</strong> AMD Ryzen 7 7735HS</p>
                    <p><strong>RAM:</strong> 16GB</p>
                    <p><strong>Armazenamento:</strong> 1TB SSD</p>
                    <p><strong>Ecrã:</strong> 15.6" FHD</p>
                    <p><strong>Gráfica:</strong> NVIDIA GeForce RTX 4060</p>
                    <p><strong>Longevidade da bateria:</strong> Até 8 horas</p>
                </div>
            </div>
        </div>

        <!-- Laptop 10 -->
        <div id="samsung-galaxy-book2-15" class="modal-container">
            <div class="modal">
                <button class="modal-close" onclick="closeModal('samsung-galaxy-book2-15')">&times;</button>
                <div class="modal-content">
                    <h3>Especificações</h3>
                    <p><strong>Processador:</strong> Intel Core i7-1260P</p>
                    <p><strong>RAM:</strong> 16GB</p>
                    <p><strong>Armazenamento:</strong> 512GB SSD</p>
                    <p><strong>Ecrã:</strong> 15.6" FHD</p>
                    <p><strong>Gráfica:</strong> Integrated Intel Iris Xe</p>
                    <p><strong>Longevidade da bateria:</strong> Até 10 horas</p>
                </div>
            </div>
        </div>

        <!-- Laptop 11 -->
        <div id="acer-aspire-5" class="modal-container">
            <div class="modal">
                <button class="modal-close" onclick="closeModal('acer-aspire-5')">&times;</button>
                <div class="modal-content">
                    <h3>Especificações</h3>
                    <p><strong>Processador:</strong> AMD Ryzen 5 5500U</p>
                    <p><strong>RAM:</strong> 8GB</p>
                    <p><strong>Armazenamento:</strong> 256GB SSD</p>
                    <p><strong>Ecrã:</strong> 15.6" FHD</p>
                    <p><strong>Gráfica:</strong> Integrated AMD Radeon</p>
                    <p><strong>Battery Life:</strong> Até 7 horas</p>
                </div>
            </div>
        </div>

        <!-- Laptop 12 -->
        <div id="microsoft-surface-laptop-5" class="modal-container">
            <div class="modal">
                <button class="modal-close" onclick="closeModal('microsoft-surface-laptop-5')">&times;</button>
                <div class="modal-content">
                    <h3>Especificações</h3>
                    <p><strong>Processador:</strong> Intel Core i7-1255U</p>
                    <p><strong>RAM:</strong> 16GB</p>
                    <p><strong>Armazenamento:</strong> 512GB SSD</p>
                    <p><strong>Ecrã:</strong> 15" PixelSense</p>
                    <p><strong>Gráfica:</strong> Integrated Intel Iris Xe</p>
                    <p><strong>Battery Life:</strong> Até 17 horas</p>
                </div>
            </div>
        </div>
    
    </body>
    
</html>

<script>
        function openModal(id) {
            document.getElementById(id).style.display = 'flex';
        }

        function closeModal(id) {
            document.getElementById(id).style.display = 'none';
        }
</script>