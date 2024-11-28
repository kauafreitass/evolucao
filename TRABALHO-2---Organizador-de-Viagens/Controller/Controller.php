<?php
require_once 'C:\aluno2\xampp\htdocs\evolucao\stefany\TRABALHO-2---Organizador-de-Viagens\Model\Model.php';

class Controller
{
    private $Model;

public function __construct($pdo){
    $this->Model = new Model($pdo);
}

public function cadastrarviagem($nome,$data_hora,$local,$roteiro){
return $this->Model->cadastrarviagem($nome,$data_hora,$local,$roteiro);
}

public function listarViagens(){
    return $this->Model->listarViagens();
}
public function editarViagens($nome,$data_hora,$local,$roteiro,$id){
    $this->Model->editarViagens($nome,$data_hora,$local,$roteiro,$id);
   
  }
  public function deletarViagem($id) {
    return $this->Model->deletarViagem($id);
}
public function cadastropessoa($nome,$email,$senha,$sexo){
    return $this->Model->cadastropessoa($nome,$email,$senha,$sexo);
    }
    public function logIn($nome, $senha)
    {
         return $this->Model->logIn($nome,$senha);
    }
}
?>