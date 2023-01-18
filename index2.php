<?php
        echo "try calcul";
        echo "<br>";
        $sn1 = $_GET["a"];
        $sn2 = $_GET["b"];
        $operacia = $_GET["operation"];
        $text = "a=" . $sn1 . " b=" . $sn2 . $operacia . "opartion? ";
        echo $text;
        if($operacia == "*"){
        $result = $sn1 * $sn2;
        }elseif($operacia == "+"){
        $result = $sn1 + $sn2;
        }elseif($operacia == "/"){
        $result = $sn1 / $sn2;
        }elseif($operacia == "-"){
        $result = $sn1 - $sn2;
        }
        echo "<br>";
        echo "Result:" . $result;
    ?>
