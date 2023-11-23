<?php
    echo "<h1>Esercizi</h1>";
    $num1 = 10;
    $num2 = 5;

    $prodotto = $num1 * $num2;

    echo "Il prodotto tra " .$num1. " e " .$num2. " è " .$prodotto;

    echo "<br><h1>Esercizio 2</h1>";

    $n1 = 15;
    $n2 = 20;

    $media = ($n1 + $n2) / 2;

    echo $media % 2 == 0 ? "<br>La media è pari" : "<br>La media è dispari";

    echo "<br><h1>Esercizio 3</h1>";

    $n1 = 5;
    $n2 = 2;
    $n3 = 7;

    //stampa in ordine crescente
    //soluzione lunga
    
    if($n1 < $n2 && $n1 < $n3){
        echo "<br>".$n1;
        if($n2 < $n3){
            echo "<br>".$n2;
            echo "<br>".$n3;
        }else{
            echo "<br>".$n3;
            echo "<br>".$n2;
        }
    }elseif($n2 < $n1 && $n2 < $n3){
        echo "<br>".$n2;
        if($n1 < $n3){
            echo "<br>".$n1;
            echo "<br>".$n3;
        }else{
            echo "<br>".$n3;
            echo "<br>".$n1;
        }
    }else{
        echo "<br>".$n3;
        if($n1 < $n2){
            echo "<br>".$n1;
            echo "<br>".$n2;
        }else{
            echo "<br>".$n2;
            echo "<br>".$n1;
        }
    }
    

    //soluzione breve
    /*$array = array($n1, $n2, $n3);

    sort($array);

    foreach($array as $value){
        echo "<br>".$value;
    }*/

    echo "<br><h1>Esercizio 4</h1>";

    $n = 4;

    function fattoriale($n){
        return $n == 0 ? 1 : $n * fattoriale($n - 1);
    }

    $fattoriale = fattoriale($n);

    echo "<br><center><b style='color:red'>Il fattoriale di " .$n. " è " .$fattoriale. "</b></center>";

    echo "<br><h1>Esercizio 5</h1>";

    $string = "Il gatto gioca in giardino";
    echo $string;
    echo "<br>".substr($string, 4, 10);
    echo "<br>".str_replace("gatto", "cane", $string);
    echo "<br>".str_replace("giardino", "casa", $string);
    echo "<br>".strtoupper($string);


?>