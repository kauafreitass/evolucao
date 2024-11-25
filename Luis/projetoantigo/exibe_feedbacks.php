<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exibe feedbacks</title>
</head>
<body>
    <h1>feedbacks Recebidos</h1>

    <?php
    $file = 'feedbacks.json';
    if(file_exists($file)) {
        $current_data = file_get_contents($file);
        $feedbacks = json_decode($current_data,true);

        if(!empty($feedbacks)){
            foreach($feedbacks as $feedback) {
                echo '<div class="card">';
                echo '<h3>'.htmlspecialchars($feedback["name"]).'</h3>';

            }
        }else{
            echo'<p>Nenhum Feedback recebido</p>';
        }
    }else {
        echo '<p>Nenhum feedback recebido</p>';
    }
    ?>
</body>
</html>