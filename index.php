<?php
    echo "<center><h1>ciao</h1></center>";

    //commento 1
    #commento 2
    /*commento 3*/
    
    //int
    $anni = 14;

    //stringhe
    $nome = 'andrea';
    $cognome = "campostrini";

    //boolean
    $maggiorenne = true;

    //double
    $media = 8.1;

    //costante
    define("nomeVariabile", "valore");

    //standard output
    echo $anni;
    echo "<br>$anni<br>";
    echo '$anni<br>';//con gli apici singoli

    echo "mi chiamo " .$nome. " " . $cognome;
    echo "<br>".nomeVariabile;

    //standard input
    //$nome = $_GET["nome"];
    //$cognome = $_GET["cognome"];

    //variabili globali
    $GLOBALS["nome"] = "andrea";
    $GLOBALS["cognome"] = "campostrini";

    //operazioni matematiche
    $a = 3;
    $b = 5;
    $c = $a + $b;
    echo "<br>".$c;
    $c = $a - $b;
    echo "<br>".$c;
    $c = $a * $b;
    echo "<br>".$c;
    $c = $a / $b;
    echo "<br>".$c;
    $c = $a % $b;
    echo "<br>".$c;
    $c = $a ** $b;
    echo "<br>".$c;

    //if else
    if($c == 8){
        echo "<br>uguale";
    }elseif (($c > 8)) {
        echo "<br>maggiore";
    }else{
        echo "<br>minore";
    }

    //operatore ternario
    echo $anni > 18 ? "<br>maggiorenne" : "<br>minorenne";

    //for while do while
    for($i = 0; $i < 10; $i++){
        echo "<br>".$i;
    }

    while($i < 10){
        echo "<br>".$i;
        $i++;
    }

    do{
        echo "<br>".$i;
        $i++;
    }while($i < 10);

    //array
    $array = array(1,2,3,4,5);

    foreach($array as $value){
        echo "<br>".$value;
    }

    $array = array("nome" => "andrea", "cognome" => "campostrini");
    echo "<br>".$array["nome"];

    $array["sas"] = "sas";

    foreach($array as $key => $value){
        echo "<br>".$key." ".$value;
    }

    $arr = array("nome" => "andrea", "cognome" => "campostrini"),
        array("nome" => "andrea", "cognome" => "campostrini"),
        array("nome" => "andrea", "cognome" => "campostrini")
    );

    echo "<br>".$arr[0]["nome"];

    $arr2 = array(
        "roba1" => array("nome" => "andrea", "cognome" => "campostrini"),
        "roba2" => array("nome" => "andrea", "cognome" => "campostrini"),
        "roba3" => array("nome" => "andrea", "cognome" => "campostrini")
    );
    //$array = ["nome" => "andrea", "cognome" => "campostrini"];

    foreach($array as $key => $value){
        echo "<br>".$key." ".$value;
    }

    //funzioni
    function nomeFunzione($parametro){
        echo "<br>".$parametro;
    }

    nomeFunzione("ciao");

    //switch
    switch($a){
        case 1:
            echo "<br>1";
            break;
        case 2:
            echo "<br>2";
            break;
        default:
            echo "<br>default";
            break;
    }

    //str len
    $stringa = "ciao";
    echo "<br>".strlen($stringa);

    for($i = 0; $i < strlen($stringa); $i++){
        echo "<br>".$stringa[$i];
    }

    //indice della lettera nella stringa
    echo "<br>".strpos($stringa, "ao");

    //reverse str
    echo "<br>".strrev($stringa);

    //substitute word in str
    echo "<br>".str_replace("ao", "ei", $stringa);

    //sanitize html
    $stringa = "<h1>ciao</h1>";
    echo "<br>".strip_tags($stringa);


?>