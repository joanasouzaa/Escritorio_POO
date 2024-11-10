<?php

require_once('Item.php');

class Objeto extends Item{
    private float $peso;

    public function __construct(string $nome, string $descricao, float $peso){
        parent::__construct($nome, $descricao);
        $this->setPeso($peso);
    }

    public function getPeso() : float {
        return $this->peso;
    }

    public function setPeso(float $peso): void{
        if(empty($peso) && $peso < 0){
            $this->peso = 0;
        }else{
            $this->peso = $peso;
        }
    }

    public function tipoItem(): string {
        return "Objeto";
    }

    public function mostrarItem(): string {
        return "- Nome: {$this->getNome()}<br> - Descrição: {$this->getDescricao()}<br> - Peso: {$this->getPeso()}";
    }
}

// $objeto = new Objeto("aaa", "bbbb", 21.6);
// echo "{$objeto->getNome()}, {$objeto->getDescricao()}, {$objeto->getPeso()}, {$objeto->mostrarTipoItem()}";