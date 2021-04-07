<!doctype html>
<html lang="pt-br">
<head>
<title>Projeto cozinha</title>
</head>
<body>
<?php
require_once ('cozinha.php');
require_once ('ingrediente.php');
require_once ('funcionario.php');
$cozinhaGaucha = new Cozinha ();
$ingrediente = new Ingrediente ();
$funcionario = new Funcionario ();
$funcionario -> setNomeFuncionario ("Gustavo");
$funcionario -> setAtividade ("cozinheiro");
$ingrediente -> setNomeIngrediente ("carne");
$ingrediente -> setDataValidade (new dateTime ("2021-06-06"));

$cozinhaGaucha -> setTipoCozinha ("gaúcha");
$cozinhaGaucha -> setPratoPrincipal ("churrasco");
$cozinhaGaucha -> setHorarioAbertura (new dateTime ("11:30"));
$cozinhaGaucha -> setHorarioFechamento (new dateTime ("15:00"));
$cozinhaGaucha -> setListaFuncionarios ($funcionario);
$cozinhaGaucha -> setListaIngredientes ($ingrediente);
$funcionarios = $cozinhaGaucha -> getListaFuncionarios();
$ingredientes = $cozinhaGaucha -> getListaIngredientes();

echo "Tipo: <br /><h2> Cozinha " . $cozinhaGaucha -> getTipoCozinha () . "</h1>";
echo "Prato principal: " . $cozinhaGaucha -> getPratoPrincipal () . " <br />";
echo "Horário abertura: " .  $cozinhaGaucha -> getHorarioAbertura () -> format ("h:i") . "<br />";
echo "Horário fechamento: " .  $cozinhaGaucha -> getHorarioFechamento () -> format ("h:i") . "<br />";
echo "Lista de funcionários:<br />";
foreach ($funcionarios as $empregado) {
echo $empregado -> getNomeFuncionario() . "<br />";
echo $empregado -> getAtividade () . "<br />";
}
echo "Lista de ingredientes da cozinha:<br />";
foreach ($ingredientes as $ingrediente) {
echo $ingrediente -> getNomeIngrediente () . "<br />";
echo $ingrediente -> getDataValidade () -> format ("y-d-m") . "<br />";
}





?>
</body>
</html>
