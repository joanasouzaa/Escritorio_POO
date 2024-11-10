<?php

require_once('Gaveta.php');

class Armario{
    private array $gavetas = [];

    public function __construct($gavetas){
     $this->setGavetas($gavetas);
    }

    public function getGavetas(): array{
        return $this->gavetas;
    }

    public function setGavetas(array $gavetas): void{
        if(empty($gavetas)){
            $this->gavetas[] = "Informe as gavetas do armário";
        }else{
            $this->gavetas = $gavetas;
        }
    }

    public function adicionarGaveta(Gaveta $gaveta): void{
        $this->gavetas[] = $gaveta;
    }

    public function removerGaveta($indice): void{
        {
            foreach ($this->gavetas as $indice => $gaveta) {
                if ($gaveta->getNome() == $indice) {
                    unset($this->gavetas[$indice]);
                    echo "Gaveta {$indice} removida com sucesso!";
                }
            }
        }
    }

    public function listarGavetas(): array{
        return $this->gavetas;
    }
}