<?php
class Funcionario {
private $nomeFuncionario;
private $atividade;

function __construct () {

}

function getNomeFuncionario () {
return $this -> nomeFuncionario;
}

function setNomeFuncionario ($nome) {
$this -> nomeFuncionario = $nome;
}

function getAtividade () {
return $this -> atividade;
}

function setAtividade ($atividade) {
$this -> atividade = $atividade;
}


}

?>
