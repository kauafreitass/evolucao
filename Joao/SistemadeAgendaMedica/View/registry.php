<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="../Assets/Css/style.css">
    
    
</head>
<body>   
    <main id="container">
        <form id="login_form">
            <!-- FORM HEADER -->
            <div id="form_header">
                <h1>Registrar-se</h1>
                <i id="mode_icon" class="fa-solid fa-moon"></i>
            </div>

           
            

            <!-- INPUTS -->
            <div id="inputs">
                <!-- NAME -->
                <div class="input-box">
                    <label for="name">
                        Nome
                        <div class="input-field">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" id="name" name="name">
                        </div>
                    </label>
                </div>
                
                <!-- EMAIL -->
                <div class="input-box">
                    <label for="email">
                        E-mail
                        <div class="input-field">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" id="email" name="email">
                        </div>
                    </label>
                </div>
                
                <!-- PASSWORD -->
                <div class="input-box">
                    <label for="password">
                        Senha
                        <div class="input-field">
                            <i class="fa-solid fa-key"></i>
                            <input type="password" id="password" name="password">
                        </div>
                    </label>
                    
                    <div class="input-box">
                        <label for="telefone">
                            Telefone
                            <div class="input-field">
                                <i class="fa-solid fa-phone"></i>
                                <input type="number" id="telefone" name="telefone">
                            </div>
                        </label>
                    </div>
                    
                    <div class="input-box">
                        <label for="Data">
                            Data de nascimento
                            <div class="input-field">
                                <i class="fa-solid fa-calendar-days"></i>
                                <input type="date" id="idade" name="idade">
                            </div>
                        </label>
                    </div>

                </div>
            </div>

            <!-- LOGIN BUTTON -->
            <button type="submit" id="login_button">
                Registar
            </button>
        </form>
    </main>

    <!-- JAVASCRIPT -->
    <script type="text/javascript" src="../Assets/Js/script.js"></script>
</body>
</html>