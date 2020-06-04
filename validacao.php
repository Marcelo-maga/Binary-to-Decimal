<?php
    $bin = $_POST["bin"];

    if($bin > 8){
        $len=strlen($bin);
        $bin=substr($bin,0,9);
        echo "Infome um valor valido";
    }
?>