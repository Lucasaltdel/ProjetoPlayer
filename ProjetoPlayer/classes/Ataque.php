<?php
include_once('Item.php');

class Ataque extends Item {
    public function __construct() {
        parent::__construct('Espada', 7.0, 'Ataque');
    }
}
?>
