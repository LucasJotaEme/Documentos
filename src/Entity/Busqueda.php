<?php
namespace App\Entity;
class Busqueda {
    private $buscar;
    private $ordenarPor;
    
    
    function getBuscar() {
        return $this->buscar;
    }

    function getOrdenarPor() {
        return $this->ordenarPor;
    }

    function setBuscar($buscar): void {
        $this->buscar = $buscar;
    }

    function setOrdenarPor($ordenarPor): void {
        $this->ordenarPor = $ordenarPor;
    }




}

