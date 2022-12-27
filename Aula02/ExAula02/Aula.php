<?php

class Aula {
    var $horario;
    var $data;
    var $comeco;
    var $interromper;
    var $qAulos;
    var $audiar;
    var $dataAdiar;
    var $professor;

    function interromper() {
        if ($this->comeco) {
            echo "Imterronpendo a Aula...";
            $this->comeco = false;
            echo "<br>Aula Imterronpida com Sucesso";
        } else {
            echo "Não tem como interromper uma aula que nem começou!";
        }
    } 

    function comeco() {
        if ($this->professor == "") {
            echo "Sem o professor não tem como iniciar!";
        } else {
            if ($this->qAulos < 15) {
                echo "Quantidade insuficiente de alunos para dar uma aula completa!";
            } else {
                if ($this->data == null) {
                    if ($this->audiar) {
                        echo "Aula adiada. Ela está prevista para começar no dia ".$this->dataAdiar;
                    } else {
                        echo  "Sem uma data definida, impossível começar uma aula!";
                    }
                } else {
                    if ($this->data == date("d/m/Y")) {
                        echo "Aula Começando Agora...";
                        $this->comeco = true;
                    } else {
                        echo "Não chegou o dia da aula ainda!";
                    }
                }
            }
        }
    }

}

?>