<?php
require_once ('Inventario.php');
require_once ('Item.php');

class Player {
    private string $nickname;
    private int $nivel;
    private Inventario $inventario;

    public function __construct(string $nickname) {
        $this->setNickname($nickname);
        $this->setNivel(1);
        $this->inventario = new Inventario($this->calcularCapacidade());
    }

    public function getNickname(): string {
        return $this->nickname;
    }

    public function setNickname(string $nickname): void {
        if ($nickname == '') {
            echo "O nickname não pode ser vazio.<br>";
        } else {
            $this->nickname = $nickname;
        }
    }

    public function getNivel(): int {
        return $this->nivel;
    }

    public function setNivel(int $nivel): void {
        if ($nivel <= 0) {
            echo "O nível deve ser maior que 0<br>";
        } else {
            $this->nivel = $nivel;
            $this->inventario = new Inventario($this->calcularCapacidade());
        }
    }

    public function subirNivel(): void {
        $this->setNivel($this->nivel + 1);
        echo "Você subiu de nível para $this->nivel<br>";
    }

    public function calcularCapacidade(): int {
        $capacidadeBase = 20;
        $incremento = 6;
        return $capacidadeBase + ($incremento * ($this->nivel - 1)) + ($this->nivel - 2) * 3;
    }

    public function coletarItem(Item $item): void {
        $this->inventario->adicionar($item);
    }

    public function getInventario(): Inventario {
        return $this->inventario;
    }
    public function soltarItem(int $item): void {
        $this->inventario->remover($item);
    }

}

