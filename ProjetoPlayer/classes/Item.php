<?php
class Item {
    private string $nome;
    private float $tamanho;
    private string $classe;

    public function __construct($nome, $tamanho, $classe) {
        $this->setNome($nome);
        $this->setTamanho($tamanho);
        $this->setClasse($classe);
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        if ($nome == "") {
            $this->nome = "Insira algum nome válido"; 
        } else {
            $this->nome = $nome;
        }
    }

    public function getTamanho(): float {
        return $this->tamanho;
    }

    public function setTamanho(float $tamanho): void {
        if ($tamanho <= 0) {
            $this->tamanho = 1.0; 
        } else {
            $this->tamanho = $tamanho;
        }
    }

    public function getClasse(): string {
        return $this->classe;
    }

    public function setClasse(string $classe): void {
        if ($classe == "") {
            $this->classe = "Insira algum tipo de classe válido";
        } else {
            $this->classe = $classe;
        }
    }
}
?>


