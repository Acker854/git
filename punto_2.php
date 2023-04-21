<?php
include 'punto_2.html';

$correctas = null;
$incorrectas = null;
$blanco = null;
$total = null;

if (isset($_POST['operador'])){
    $correctas = $_POST ['correctas'];
    $incorrectas = $_POST ['incorrectas'];
    $blanco = $_POST ['blanco'];
    //operacion multiplicar *4
    $total_correctas = $correctas*4;
    //operacion restra
    $total =$total_correctas -$incorrectas;
        echo 'la nota es'. $total;
}

?>