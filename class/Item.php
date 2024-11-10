<?php

class Item{
    private string $nome;
    private string $descricao;

    public function __construct(string $nome, string $descricao){
        $this->setNome($nome);
        $this->setDescricao($descricao);
    }

    public function getNome(): string{
        return $this->nome;
    }

    public function setNome(string $nome): void{
        if(empty($nome)){
            $this->nome = "Insira um item válido";
        }else{
            $this->nome = $nome;
        }
    }

    public function getDescricao(): string{
        return $this->descricao;
    }

    public function setDescricao(string $descricao): void{
        if(empty($descricao)){
            $this->descricao = "Insira um descrição para o item";
        }else{
            $this->descricao = $descricao;
        }
    }

}

// $item = new Item('grampeador', 'grampeador preto antigo');
// echo "{$item->getNome()}";
// echo "{$item->getDescricao()}";