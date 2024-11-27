<?php
require_once ('Item.php');
require_once ('Ataque.php');
require_once ('Defesa.php');
require_once ('Magia.php');


class Inventario{
    private int $capacidadeMaxima = 20; 
    private array $itens = [];

    public function __construct(int $capacidadeMaxima){
        $this->setCapacidadeMaxima($capacidadeMaxima);
    }

    public function getCapacidadeMaxima(): int{
        return $this->capacidadeMaxima;
    }

    public function setCapacidadeMaxima(int $capacidadeMaxima): void{
        if($capacidadeMaxima >= 20){
            $this->capacidadeMaxima = $capacidadeMaxima;
        } else {
            $this->capacidadeMaxima = 20;
        }
    }

    public function adicionar(Item $item): void{
        if($item->getTamanho() <= $this->capacidadeLivre()){ 
            array_push($this->itens, $item);
            echo "Item foi adicionado </br>";
        } else {
            echo "Você não tem espaço suficiente no Inventario </br>"; 
        }
    }
    public function remover(int $item): void{
        if($item >= 0 || count($this->itens) <= $item){ 
            unset($this->itens[$item]); 
            echo "Item retirado com sucesso do Inventario </br>";
        } else {
            echo "Item não foi encontrado </br>";
        }
        
    }

    public function listar(): void{ 

        foreach($this->itens as $item){
            echo "{$item->getNome()} </br>";
        }

    }

    public function capacidadeLivre(): float{
        $pesoTotal = 0;

        foreach($this->itens as $item){
            $pesoTotal += $item->getTamanho(); 
        }
        return $this->getCapacidadeMaxima() - $pesoTotal;
    }
}

