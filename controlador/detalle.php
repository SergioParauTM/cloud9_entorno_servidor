<?php

require_once '../modelo/ConexionBD.php';

require_once 'ObtenerTitulos.php';


$titulosEntrada = ObtenerTitulos::get_entradas_id($_GET['id']);

    require'../vista/show.php';
?>