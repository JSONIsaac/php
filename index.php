<?php

    $habitacion = ["Mesa", "Pulsera", "Cama"];
    $pulsera = "Pulsera";
    $propia =  true;

    function encontrarPulsera($mia) {
        if ($pulsera != $mia){
            // for ($habitacion=0; $habitacion == 'Pulsera'; $pulsera++) { 
            //     echo "Pulsera encontrada";
            // }
            for ($x=0;$x<count($habitacion); $x++)
            echo $lista[$x]."<br>";
        }
    }

   
    // var_dump($habitacion);
?>