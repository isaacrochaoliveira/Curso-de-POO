<?php
    require_once('Celular.php');

    $celular = new Celular();
    $celular->carga(100);
    $celular->ligar();
?>