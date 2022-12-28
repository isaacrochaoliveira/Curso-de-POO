<?php

class Celular {

    var $ligado;
    var $porcetagem;
    var $cor;
    var $polegadas;
    var $silencioso;

    public function ligar() {
        if ($this->ligado) {
            echo "O Seu Celular já está ligado";
        } else {
            if ($this->porcetagem > 15) {
                echo "Ligando...";
                $this->ligado = true;
            } else {
                echo "Telefone sem carga!";
            }
        }
    }

    public function carga($carga) {
        if ($this->carga == 100) {
            echo "Telefone não precisa de mais carga! 100%";
        } else if ($this->carga > 0 && $this->carga < 100) {
            echo "Recarregando celular: $carga%";
        }
    }

}
?>