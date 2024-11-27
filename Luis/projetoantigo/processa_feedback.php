<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="pagina1.css">

    <title>Document</title>
</head>

<body>
    <header>
        <nav class="navbar">

            <div class="logo"><a href="index.html">CONTATOS</a></div>
            <div>
                <ul class="nav-link">
                    <input type="checkbox" id="checkbox_toggle" />
                    <label for="checkbox_toggle" class="hamburger">&#9776;</label>

                    <div class="menu">
                        <li><a href="../index.php">VOLTAR</a></li>
<li><a href="pagina1.html">INICIO</a></li>
                        <li><a href="sobre.html">SOBRE</a></li>
                        <li><a href="profissao.html">PROFISSAO</a></li>
                        <li><a href="campodeatuacao.html">ATUAÇAO</a></li>
                        <li><a href="empresasenvolvidas.html">EMPRESAS</a></li>
                        <li><a href="fontes.html">FONTES</a></li>



                    </div>


                    </div>
                </ul>
            </div>
        </nav>
    </header>

    <section>
        <main class="colunas principal">
            <section class="coluna principal-coluna">
                <a href="#" class="artigo-first artigo">
                    <figure class="artigo-imagem is-4by3">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtKo9bghvg14dGTWwpCuXFJO2VXurz1q3mTw&amp;usqp=CAU&quot;&quot;"
                            alt="">
                    </figure>
                    <div class="artigo-corpo">
                        <h2 class="artigo-titulo">Contatos</h2>
                        <p class="artigo-conteudo">

                            <br>
                            (33)4444-2222
                            <br>
                            (33)5555-3333
                            <br>
                            (33)3333-4444
                            <br>
                            <br>
                            Email:CLeitin@Gmail.com
                            <br>
                            Email:Joaozinho@Gmail.com
                            <br>
                            Email:Neymar@Gmail.com
                        </p>
                        <br>
                        <br>
                        <h1>SEU FEEDBACK</h1>
                        <form action="processa_feedback.php" method="POST">
                            <?php

if($_SERVER["REQUEST_METHOD"] =="POST"){
    $sugestao = htmlspecialchars($_POST["sugestao"]);

    $data = array(
        "name" => $sugestao
    );

    $file = 'feedbacks.json';

    if(file_exists($file)) {
        $current_data = file_get_contents($file);
        $array_data = json_decode($current_data,true);
        $array_data[] = $data;
        $final_data = json_encode($array_data, JSON_PRETTY_PRINT);
    }else {
        $array_data = array();
        $array_data[] = $data;
        $final_data = json_encode($array_data, JSON_PRETTY_PRINT);
    }

    if(file_put_contents($file, $final_data)){
        echo "feedback salvo com sucesso!";
        echo '<a href="exibe_feedbacks.php">Ver feedbacks</a>';
    }else{
        echo"Erro ao salvar seu feedback!";
    }
    
}


?>
                        </form>
                    </div>
                    <footer>
                        <a href="https://www.instagram.com/"><img
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrDUUaUw_TIOF7SPLe55FQifcZFwAJD2Th4n-zcDVpZw&s"
                                alt=""> INSTAGRAM</a>
                        <br>
                        <a href="https://web.whatsapp.com/"><img
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrgWaAGGiJ6wb1gmll59mdIEbtJw3SOoHj3OFie_bhjg&s">WHATSAPP</a>
                        <br>
                        <a href="https://www.facebook.com/?locale=pt_BR"><img
                                src="https://w7.pngwing.com/pngs/201/462/png-transparent-computer-icons-facebook-facebook-logo-black-and-white-symbol-thumbnail.png">FACEBOOK</a>
                    </footer>
                </a>
            </section>

    </section>
    </main>
</body>

</html>
