<?php

class Caneta {
    
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar() {
        if ($this->tampada) {
            echo "<h2>Não posso rabiscar</h2>";
        } else {
            echo "<h2>Estou rabiscando...</h2>";
        }
    }

    function tampar() {
        $this->tampada = true;
    }

    function destampar() {
        $this->tampada = false;
    }

}