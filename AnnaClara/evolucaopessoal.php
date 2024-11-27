<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>evolução</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body class="evolucao">
<header>
        <nav class="navbar">
            <div class="logo-container">
                <span>✾∽∽∽⊰⊱∽∽∽∽∽⊰✾⊱∽∽∽∽∽⊰</span>
                <input type="checkbox" id="menu-toggle">
                <label for="menu-toggle" class="hamburger">&#9776;</label>
                <ul class="menu">
                    <div class="linha"></div>
                    <li><a href="primeiroprojeto.php">♔PRIMEIRO PROJETO</a></li>
                    <li><a href="projetoatual.php">❃PROJETO ATUAL</a></li>
                    <li><a href="dificuldades.php">♔DIFICULDADES</a></li>
                    <a href="evolucao.php"><h1>EVOLUÇÃO</h1></a>
                    <li><a href="evolucaopessoal.php">♔PROGRESSO</a></li>
                    <li><a href="contato.php">♔CONTATO</a></li>
                </ul>
                <span>✾∽∽∽⊰⊱∽∽∽∽∽⊰✾⊱∽∽∽∽∽⊰⊱∽∽∽</span>
            </div>
        </nav>
    </header>
    <br><br><br>    <br><br><br>

        <h1 >EVOLUÇÃO PESSOAL</h1>
        <section class="intro">
        <div class="slider-container">
            <div class="slider">
                <div class="slider-item">
                    <img src="img/Leonardo_Phoenix_Create_a_sophisticated_monochromatic_image_fe_2.jpg" alt="Primeiro Projeto" width="600px">
                </div>
                <div class="slider-item">
                    <img src="img/Leonardo_Phoenix_Create_a_sophisticated_monochromatic_image_fe_3.jpg" alt="Catálogo" width="600px">
                </div>
                <div class="slider-item">
                    <img src="img/Leonardo_Phoenix_Create_a_sophisticated_monochromatic_image_fe_1 (1).jpg" alt="Projeto Atual"width="600px">
                </div><div class="carousel-item">
                    <img src="img/Leonardo_Phoenix_Create_an_elegant_grayscale_image_predominant_3.jpg" alt="Projeto Atual"width="600px">
                </div>
            </div>
            <button class="slider-prev">&#10094;</button>
            <button class="slider-next">&#10095;</button>
        </div>
    </section>
                  

   
    
    <section class="project-section">
      

        <div class="semelhanças">
            <img src="img/capturainicio.PNG" alt="" class="semelhanças-image">
            <div class="semelhanças-text">
                <p>★ Ao longo dos projetos, eu evolui de estruturas simples para criações dinâmicas e sofisticadas, unindo design responsivo, funcionalidades interativas com PHP e MySQL, e integração de tecnologias modernas. Com uma crescente preocupação com estética, acessibilidade e experiência do usuário, criando páginas que equilibram criatividade e funcionalidade.
</p>
            </div>
            <img src="img/catalogo.png" alt="" class="semelhanças-image">
        </div>
    </section>    <h1>MEU PROGRESSO</h1>

    <section class="info-container">
    <div class="info-content">
        <div class="info-item" >
            <h3>Primeiro Projeto</h3>
            <p>Meu início foi focado em compreender conceitos básicos de programação, com foco em HTML e CSS, criando estruturas estáticas e aprendendo a importância da semântica no código.</p>
        </div>
        <div class="info-item">
            <h3>Domínio de Responsividade</h3>
            <p>Com o passar do tempo, comecei a dominar o uso de media queries, tornando meus projetos adaptáveis a diferentes dispositivos e oferecendo uma experiência de usuário mais consistente.</p>
        </div>
        <div class="info-item" >
            <h3>Integração com Banco de Dados</h3>
            <p>Aprendi a trabalhar com PHP e MySQL para armazenar e gerenciar dados dinamicamente, como em catálogos e formulários de feedbacks.</p>
        </div>
        <div class="info-item" >
            <h3>Próximos Passos</h3>
            <p>Meu objetivo é explorar frameworks modernos como React ou Vue.js para ampliar minhas habilidades e trazer ainda mais interatividade às minhas criações.</p>
        </div>
        <div class="info-item" >
            <h3>Otimização de Performance</h3>
            <p>Aprendi a implementar práticas de otimização, como compressão de imagens, minificação de arquivos e uso de cache, garantindo sites mais rápidos e eficientes.</p>
        </div>
        <div class="info-item" >
            <h3>Design Centrado no Usuário</h3>
            <p>Incorporei conceitos de UX/UI, utilizando ferramentas de prototipação e testes de usabilidade para criar experiências mais intuitivas e atraentes.</p>
        </div>
    </div>
</section>

    <footer class="site-footer">
        <div class="footer-container">
            <div class="footer-section">
                <h4>Sobre Projetos</h4>
                <p>Comecei com projetos simples e progredi para iniciativas mais complexas, com foco em design responsivo e integração de novas tecnologias.</p>
            </div>
            <div class="footer-section">
                <h4>Links rápidos</h4>
                <ul>
                    <li><a href="primeiroprojeto.php">♔PRIMEIRO PROJETO</a></li>
                    <li><a href="projetoatual.php">❃PROJETO ATUAL</a></li>
                    <li><a href="dificuldades.php">♔DIFICULDADES</a></li>
                    <li><a href="evolucaopessoal.php">♔PROGRESSO</a></li>
                    <li><a href="evolucao.php">❃EVOLUÇÃO</a></li>
                    <li><a href="contato.php">♔CONTATO</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Contato</h4>
                <ul>
                    <li><a href="#">Email: contato@annaclara.com</a></li>
                    <li><a href="#">Telefone: (18) 99693-5678</a></li>
                    <li><a href="#">Endereço: Rua Flores, 123, São Paulo, SP</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Anna Clara Gonçalves. Todos os direitos reservados.</p>
        </div>
    </footer>
    <script>
       const slider = document.querySelector('.slider');
        let currentIndex = 0;
        const items = document.querySelectorAll('.slider-item');
        const totalItems = items.length;

        function showNext() {
            currentIndex = (currentIndex + 1) % totalItems;
            updateSliderPosition();
        }

        function showPrev() {
            currentIndex = (currentIndex - 1 + totalItems) % totalItems;
            updateSliderPosition();
        }

        function updateSliderPosition() {
            const offset = -currentIndex * 100;
            slider.style.transform = `translateX(${offset}%)`;
        }

        // Botões de navegação
        document.querySelector('.slider-next').addEventListener('click', showNext);
        document.querySelector('.slider-prev').addEventListener('click', showPrev);

        // Função de slider automático
        setInterval(showNext, 5000); // 5000ms = 5 segundos
    </script>
</body>
</html>
