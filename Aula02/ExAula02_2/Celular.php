<?php

class Celular {

    var $ligado;
    var $porcetagem;

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
        if ($this->porcetagem == 100) {
            echo "Telefone não precisa de mais carga! 100%";
        } else if ($this->porcetagem > 0 && $this->porcetagem < 100) {
            echo "Recarregando celular: $carga%";
            $this->porcetagem = $carga;
        }
    }
}
?>