<?php

require_once('Item.php');

class Gaveta
{
    private array $itens = [];

    public function __construct($itens)
    {
        $this->setItens($itens);
        
    }

    public function getItens(): array
    {
        return $this->itens;
    }

    public function setItens(array $itens): void
    {
        if (empty($itens)) {
            $this->itens[] = "Informe os itens que deseja adicionar na gaveta";
        } else {
            $this->itens = $itens;
        }
    }

    //add item na lista
    public function adicionarItem(Item $item): void
    {
        $this->itens[] = $item; //add um item no array
    }

    public function removerItem($nome): void
    {
        foreach ($this->itens as $nome => $item) {
            if ($item->getNome() == $nome) {
                unset($this->itens[$nome]);
                echo "Item {$item} removido com sucesso";
            }
        }
    }

    public function listarItens(): array
    {
        return $this->itens;
    }
}





