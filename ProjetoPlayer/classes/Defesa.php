<?php
include_once('Item.php');

class Defesa extends Item {
    public function __construct() {
        parent::__construct('Escudo', 4.0, 'Defesa');
    }
}
?>