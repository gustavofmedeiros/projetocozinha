<?php
class Ingrediente {

private $nomeIngrediente;
private $dataValidade;


function __construct () {

}

function getNomeIngrediente () {
return $this -> nomeIngrediente;
}

function setNomeIngrediente ($ingrediente) {
$this -> nomeIngrediente = $ingrediente;
}

function getDataValidade ():dateTime {
return $this -> dataValidade;
}

function setDataValidade (dateTime $validade) {
$this -> dataValidade = $validade;
}

}

?>
