<?php
require_once ('classes/Player.php');
require_once ('classes/Ataque.php');
require_once ('classes/Defesa.php');
require_once ('classes/Magia.php');


$player = new Player("Forreλner", );


$itemAtaque1 = new Ataque("Espada", 7, "Ataque");
$itemDefesa1 = new Defesa("Escudo", 4, "Defesa");
$itemMagia1 = new Magia("Vara", 2, "Magia");


echo "Coletando itens para {$player->getNickname()}:<br>";
$player->coletarItem($itemAtaque1);
$player->coletarItem($itemDefesa1);
$player->coletarItem($itemMagia1);
echo "<br>";


echo "Inventário de {$player->getNickname()}:<br>";
$player->getInventario()->listar();
echo "<br>";


echo "{$player->getNickname()} está subindo de nível!<br>";
$player->subirNivel();
echo "Novo nível: " . $player->getNivel() . "<br>";
echo "Nova capacidade do inventário: " . $player->getInventario()->getCapacidadeMaxima() . "<br>";
echo "<br>";
?>



