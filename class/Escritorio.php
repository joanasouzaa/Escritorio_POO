<?php

require_once('Armario.php');
// require_once('Item.php');

class Escritorio
{
    private array $armarios = [];

    public function __construct($armarios)
    {
        $this->setArmarios($armarios);
    }

    public function getArmario(): array
    {
        return $this->armarios;
    }

    public function setArmarios(array $armarios): void
    {
        if (empty($armarios)) {
            echo "Informe um armário válido";
        } else {
            $this->armarios = $armarios;
        }
    }

    public function adicionarArmario(Armario $armario): void
    {
        $this->armarios[] = $armario;
    }

    public function removerArmario($indice)
    {
        foreach ($this->armarios as $indice => $armario) {
            if ($armario->getArmario() == $indice) {
                unset($this->armarios[$indice]);
                echo "Armário {$indice} removido com sucesso!";
            }
        }
    }

    public function listarArmarios(): array
    {
        return $this->armarios;
    }

    public function auditoria(): void
    {
        foreach ($this->armarios as $indiceArmario => $armario) {
            echo "<hr>";
            echo "<b>Armário</b>: {$indiceArmario}<br>";

            foreach ($armario->listarGavetas() as $indiceGavetas => $gaveta) {
                echo "<b>Gaveta</b>: {$indiceGavetas}<br>";

                foreach ($gaveta->listarItens() as $item) {
                   echo "Item: {$item->tipoItem()}<br> {$item->mostrarItem()} <br>";
                }
            }
        }
    }
}