<?php

class Caneta {
    
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function rabiscar() {
        if ($this->tampada) {
            echo "<h2>Não posso rabiscar</h2>";
        } else {
            echo "<h2>Estou rabiscando...</h2>";
        }
    }

    public function tampar() {
        $this->tampada = true;
    }

    public function destampar() {
        $this->tampada = false;
    }

}