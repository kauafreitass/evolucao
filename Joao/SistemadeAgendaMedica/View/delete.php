<?php
require_once 'C:\aluno2\xampp\htdocs\SistemadeAgendaMedica\View\db_connect.php';
require_once 'C:\aluno2\xampp\htdocs\SistemadeAgendaMedica\Controller\AgendaController.php';

$controller = new AgendaController($pdo);


if (isset($_GET['id'])) {
    $controller->deletarConsulta($_GET['id']);
    header("Location:admin.php");
}
?>