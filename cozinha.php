<?php
require_once ("funcionario.php");
require_once ("ingrediente.php");

class Cozinha {
 private array $listaIngredientes = [];
private array $listaFuncionarios = [];

private $tipoCozinha;
private $pratoPrincipal;
private dateTime $horarioAbertura;
private dateTime $horarioFechamento;

function __construct () {

// construtor da classe em php funciona assim
}

function getListaFuncionarios ():array {
return $this -> listaFuncionarios;
}

function setListaFuncionarios (Funcionario $funcionario):void {

array_push ($this -> listaFuncionarios, $funcionario);

}

function getListaIngredientes ():array {
return $this -> listaIngredientes;
}

function setListaIngredientes (Ingrediente $ingrediente):void {
array_push ($this -> listaIngredientes, $ingrediente);
}

function getTipoCozinha () {
return $this -> tipoCozinha;
}

function setTipoCozinha ($tipo) {
$this -> tipoCozinha = $tipo;
}

function getPratoPrincipal () {
return $this -> pratoPrincipal;
}

function setPratoPrincipal ($principal) {
$this -> pratoPrincipal = $principal;
}

function getHorarioAbertura (): dateTime {
return $this -> horarioAbertura;
}

function setHorarioAbertura (dateTime $horaAbertura) {
$this -> horarioAbertura = $horaAbertura;
}

function getHorarioFechamento (): dateTime {
return $this -> horarioFechamento;
}

function setHorarioFechamento (dateTime $horaFechamento) {
$this -> horarioFechamento = $horaFechamento;
}

}

?>
