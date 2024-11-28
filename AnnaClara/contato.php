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
                    <li><a href="contato.php">❃CONTATO</a></li>
                    <li><a href="../evolucao.php">♔SAIR</a></li>

                </ul>
                <span>✾∽∽∽⊰⊱∽∽∽∽∽⊰✾⊱∽∽∽∽∽⊰⊱∽∽∽</span>
            </div>
        </nav>
    </header>
<br><br><br>

<h6>CONTATO</h6>
<hr>
<h1>Conecte-se comigo:</h1>
<h3>
    <a href="mailto:annaclaragoliveir08@gmail.com">annaclaragoliveir08@gmail.com</a>
</h3>
<hr>
<main>
    <div class="contact-form">
        <form action="processa_feedback.php" method="POST">
            <div class="form-row">
                <div class="form">
                    <label for="name">Nome*</label>
                    <input type="text" id="name" name="name" placeholder="Digite seu nome" required>
                </div>
                <div class="form">
                    <label for="lastname">Sobrenome*</label>
                    <input type="text" id="lastname" name="lastname" placeholder="Digite seu sobrenome">
                </div>
            </div>
            <div class="form-row">
                <div class="form">
                    <label for="email">Email*</label>
                    <input type="email" id="email" name="email" placeholder="Digite seu email" required>
                </div>
                <div class="form">
                    <label for="subject">Assunto*</label>
                    <input type="text" id="subject" name="subject" placeholder="Digite o assunto" required>
                </div>
            </div>
            <div class="form">
                <label for="feedback">Feedback:</label>
                <textarea id="feedback" name="feedback" rows="5" placeholder="Escreva seu feedback aqui" required></textarea>
            </div>
            <div class="button-container">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
</main>

               <br><br><br><br>
                 
               <footer class="site-footer">
        <div class="footer-container">
            <div class="footer-section">
                <h4>Sobre Projetos</h4>
                <p>Comecei com iniciativas básicas, como meu primeiro projeto, focado em aprender lógica e estrutura de código, passando por um projeto atual, que incorpora design responsivo, interatividade e integração de tecnologias modernas.</p>
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
    <script src="script.js"></script>
</body>
</html>



     