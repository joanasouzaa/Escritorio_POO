<?php

require_once('Item.php');

class Pasta extends Item{
    private string $categoria;

    public function __construct(string $nome, string $descricao, $categoria){
        parent::__construct($nome, $descricao);
        $this->setCategoria($categoria);
    }

    public function getCategoria(): string{
        return $this->categoria;
    }

    public function setCategoria(string $categoria): void{
        if(empty($categoria)){
            $this->categoria = "Informe a categoria da pasta";
        }else{
            $this->categoria = $categoria;
        }
    }

    public function tipoItem(): string{
        return "Pasta";
    }

    public function mostrarItem(): string{
        return "- Nome: {$this->getNome()}<br> - Descrição: {$this->getDescricao()}<br> - Data: {$this->getCategoria()}";
    }
}

// $pasta = new Pasta('teste', 'pasta teste', 'contas');
// echo "{$pasta->getNome()}<br>";
// echo "{$pasta->getDescricao()}<br>";
// echo "{$pasta->getCategoria()}";
// echo "{$pasta->mostrarTipoItem()}";