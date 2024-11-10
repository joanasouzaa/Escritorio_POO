<?php
require_once('Item.php');

class Documento extends Item{
    private string $dataCriacao;

    public function __construct(string $nome, string $descricao, string $dataCriacao){
        parent::__construct($nome, $descricao);
        $this->setDataCriacao($dataCriacao);
    }

    public function getDataCriacao(): string{
        return $this->dataCriacao;
    }

    public function setDataCriacao(string $dataCriacao): void{
        if(empty($dataCriacao)){
            $this->dataCriacao = "Insira a data de criação do documento.";
        }else{
            $this->dataCriacao = $dataCriacao;
        }
    }

    public function tipoItem(): string{
        return "Documento";
    }

    public function mostrarItem(): string{
        return "- Nome: {$this->getNome()}<br> - Descrição: {$this->getDescricao()}<br> - Data: {$this->getDataCriacao()}.";
    }
}


// $documentoo = new Documento("aaaa", "bbbbb", "20-09-2020");
// echo "{$documentoo->getNome()}, {$documentoo->getDescricao()}, {$documentoo->getDataCriacao()}, {$documentoo->mostrarTipoItem()}";