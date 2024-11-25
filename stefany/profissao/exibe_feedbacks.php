<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exibe feedback</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link para o arquivo CSS -->
    <link rel="stylesheet" href="stylescadastro.css"> <!-- Link para o arquivo CSS -->
    <style>
.card{
    border:1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    margin: 10px;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);

}
    </style>

</head>
<body>
    

<h1>efeedbacks recebidos</h1>
<?php
$file='feedback.json';

if (file_exists($file)){
    $current_data=file_get_contents($file);
    $feedbacks =json_decode($current_data,true);

    if (!empty ($feedbacks)){
        foreach ($feedbacks as $feedback){
        echo'<div class="card">';
        echo '<h3>'.htmlspecialchars($feedback["name"]).'</h3>';
        echo '<p><strong>email:<strong>'.htmlspecialchars($feedback["email"]).'<p/>';
        echo '<p>'.htmlspecialchars($feedback["feedback"]).'</p>';
        echo '</div>';
        }
    }else{
        echo'<p>nenhum feedback recebido</p>';   
    }
}else{
    echo'<p>nenhum feedback recebido</p>';
}
?>

</body>
</html>



