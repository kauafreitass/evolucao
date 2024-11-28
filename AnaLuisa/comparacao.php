<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMPARAÇÃO</title>
    <link rel="stylesheet" href="style.css">
    <script defer src="app.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>

<body>
    <header>
        <nav>
            <a href="#" class="logo"> EVOLUÇÃO</a>

            <button class="hamburger"></button>

            <ul class="nav-list">
                <li><a href="evolucao.php">INICIO</a></li>
                <li><a href="projectold.php">PROJETO ANTIGO</a></li>
                <li><a href="newproject.php">PROJETO ATUAL</a></li>
                <li><a href="comparacao.php">COMPARAÇÃO</a></li>

            </ul>
        </nav>
    </header><br><br>
    <main class="contentainer">


        <div class="comparacontainer">
            <div class="comparatext">
                <h1>COMPARAÇÃO</h1><br>
                <p>Com o objetivo de destacar nossa evolução ao longo do tempo, esta página foi pedida e projetada.
                    Aqui, vamos comparar o trabalho recente com o antigo, analisando detalhadamente todas as melhorias
                    realizadas e as mudanças que conseguimos.
                </p><br>
            </div>

            <div class="comparaimages">

                <div class="imageone">
                    <img src="img/projetoatualtwo.jpeg" alt="" class="imgcomp"><br><br>
                    <a href="newproject.php"><button class="basestyles">PROJETO ATUAL</button></a>
                </div>

                <div class="imagetwo">
                    <img src="img/projetoantigotwo.jpeg" alt="" class="imgcomptwo"><br><br>
                    <a href="projectold.php"><button class="basestyles">PROJETO ANTIGO</button></a>
                </div>

            </div>


        </div>




        <div class="containerjustext">
            <div class="contjustext"><br>
                <h1>
                    DIFICULDADES
                </h1><br><br>
                <p>Como apresentado nas páginas anteriores, ao longo de ambos os projetos enfrentamos diversas
                    dificuldades, sejam pequenas ou grandes, que precisaram ser superadas. Durante o desenvolvimento de
                    nossos trabalhos ao longo da etapa, buscamos soluções para minimizar esses desafios e melhorar
                    nossos processos e resultados.</p><br>
                <p>Para melhor visualização desses avanços podemos fazer uma tabela de nossas dificuldades.
                </p><br>
            </div>
        </div>

        <div class="tabletainergeral"><br>

            <h1 class="title">TABELA DE DIFICULDADES</h1><br>
            <div class="tabelacontainer"><br>

                <table>
                    <thead>
                        <tr>
                            <th>DIFICULDADE</th>
                            <th>SOLUÇÃO</th>
                        </tr>
                    </thead>

                    <tr class="item">
                        <td>LAYOUTS RESPONSIVOS</td>
                        <td>Após a criação de vários sites responsivos, adotamos algumas práticas para minimizar erros
                            comuns. No meu caso, passei a utilizar larguras adaptáveis, definindo o *width* em
                            porcentagens para as *divs* que contêm conteúdo. Outra medida foi trabalhar o design
                            responsivo de forma progressiva, ou seja, ajustar cada seção, como o *header*, para ser
                            responsiva assim que estivesse pronta, em vez de deixar essas adaptações para o final do
                            processo.</td>
                    </tr>
                    <tr class="item">
                        <td>ENTENDER A LÓGICA DE PROGRAMAÇÃO</td>
                        <td>Com a prática diária na resolução de diversos exercícios relacionados à matéria, conseguimos
                            melhorar nossa lógica, tornando a resolução dos problemas cada vez mais simples.</td>
                    </tr>

                    <tr class="item">
                        <td>TRABALHAR COM GITHUB</td>
                        <td>Assim como a lógica, foi dos exercícios continuos ao longo da etapa que estamos melhorando a utilização dessa ferramenta.
                        </td>
                    </tr>


                </table>

            </div><br><br>

        </div>

        <div class="containerjustextwhite">
            <div class="contjustexwhite"><br>
                <h1>
                    CONCLUSÃO
                </h1><br>
                <p>Ao fazermos uma breve análise, podemos concluir que, ao longo de todos os projetos desenvolvidos,
                    tanto individuais quanto em grupo, tivemos um progresso significativo. Esses trabalhos nos ajudaram
                    a aprimorar não apenas nossas habilidades na área tecnológica, mas também a fortalecer competências
                    no âmbito socioemocional, como trabalho em equipe, comunicação e resolução de problemas. A
                    experiência de projetar e colaborar com colegas contribuiu para nosso crescimento pessoal e
                    profissional, preparando-nos melhor para enfrentar desafios futuros.</p><br>
            </div>
        </div>

    </main>

    <div class="footainer">
        <footer class="footer">

            <ul class="sociallinks">
                <li class="icon-elemt">
                    <a href="" class="icon"><i class="fa-brands fa-tiktok"></i></a>
                </li>

                <li class="icon-elemt">
                    <a href="" class="icon"><i class="fa-brands fa-instagram"></i></a>
                </li>

                <li class="icon-elemt">
                    <a href="" class="icon"><i class="fa-brands fa-x-twitter"></i></a>
                </li>

                <li class="icon-elemt">
                    <a href="" class="icon"><i class="fa-brands fa-github"></i></a>
                </li>
            </ul>


            <ul class="menu">
                <li class="menuelemen">
                    <a href="evolucao.php" class="menu-icon">INICIO</a>
                </li>

                <li class="menuelemen">
                    <a href="projectold.php" class="menu-icon">PROJETO ANTIGO</a>
                </li>

                <li class="menuelemen">
                    <a href="newproject.php" class="menu-icon">PROJETO ATUAL</a>
                </li>

                <li class="menuelemen">
                    <a href="comparacao.php" class="menu-icon">COMPARAÇÕES</a>
                </li>
            </ul>

        </footer>
    </div>

    <script src="app.js"></script>
</body>

</html>