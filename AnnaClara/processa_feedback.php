<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Comentario</title>
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
               
               
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $email = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $feedback = htmlspecialchars($_POST["feedback"]);

    $data = array(
        "name" => $name, 
        "lastname" => $lastname,
        "email" => $email,
        "subject" => $subject,
        "feedback" => $feedback
    );
    $file = 'feedbacks.json';

    if(file_exists($file)) {
        $current_data = file_get_contents($file);
        $array_data = json_decode($current_data,true);
        $array_data[] = $data;
        $final_data = json_encode($array_data, JSON_PRETTY_PRINT);
    } else{
        $array_data = array();
        $array_data[] = $data;
        $final_data = json_encode($array_data, JSON_PRETTY_PRINT);
    }

    if(file_put_contents($file, $final_data)){
        echo '<br><br><br><br><br><br><br><br><br>  ';
        echo '<h5>✾Feedback enviado com sucesso!✾</h5>';
        echo '<h3><a href="exibe_feedbacks.php"> ★VER FEEDBACKS★ </a></h3>';
    } else {
        echo '<h3>"Erro ao salvar feedback!"</h3>';
    }

}
?>
   </div>
                    </main>
               </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>                  
               
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
</body>
</html>
