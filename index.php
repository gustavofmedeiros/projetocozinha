<!doctype html>
<html lang="pt-br">
<head>
<title>Projeto cozinha</title>
</head>
<body>
<?php
require ('cozinha.php');
require ('ingrediente.php');
require ('funcionario.php');
$cozinha = new Cozinha ();
$ingrediente = new Ingrediente ();
$funcionario = new Funcionario ();
$cozinha -> tipoCozinha = "mineira";
$cozinha -> pratoPrincipal = "feijoada";
$cozinha -> horarioAbertura = "14:00";
$cozinha -> horarioFechamento = "20:00";

$ingrediente -> nomeIngrediente = "feijão";
$ingrediente -> dataValidade = "21-04-2021";

$funcionario -> nomeFuncionario = "Gustavo";
$funcionario -> atividadeFuncionario = "Cozinhar";
$funcionario = $funcionario -> trabalhar($funcionario -> nomeFuncionario, $funcionario -> atividadeFuncionario);

echo "Ingrediente: " . $ingrediente -> nomeIngrediente . "; Data de validade: " . $ingrediente -> dataValidade . "<br />";
echo "Tipo de cozinha: " . $cozinha -> tipoCozinha . "; Prato principal: " . $cozinha -> pratoPrincipal . "; horário de abertura: " . $cozinha -> horarioAbertura . "; horário de fechamento: " . $cozinha -> horarioFechamento . "<br />";

?>
</body>
</html>
