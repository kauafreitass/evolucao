
<?php

if ($_SERVER["REQUEST_METHOD"]=="POSTE");
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$feedback= htmlspecialchars($_POST["feedback"]);

$data = array (
    "name"=> $name,
    "email"=>$email,
    "feedback"=>$feedback,
);

$file='feedback.json';

if(file_exists($file)){

    $current_data = file_get_contents($file);
    $array_data =json_decode($current_data,true);
    $array_data[] = $data;
    $final_data =json_encode($array_data, JSON_PRETTY_PRINT);
}else {
    $array_data = array();
    $array_data[] = $data;
    $final_data = json_encode($array_data, JSON_PRETTY_PRINT);
}

if(file_put_contents($file,$final_data)){
    echo "feedback salvo com sucesso!";
    echo'<a href="exibe_feedbacks.php">ver feedbacks</a>';
}else{
    echo "Erro ao salvar seu feedback!";
}






    # code...
