<?php
    $cognome = $_REQUEST["cognome"];
    //$cognome = $_GET["cognome"];
    //$cognome = $_POST["cognome"];

    $nome = $_REQUEST["nome"];
    $email = $_REQUEST["email"];
    $numero = $_REQUEST["numero"];

    $hotel = $_REQUEST["hotel"];
    $tipo = $_REQUEST["tipo"];

    $optional = $_REQUEST["optional"];

    $debug=1;
    if($debug){
        echo "nome: " . $nome . "<br>";
        echo "cognome: " . $cognome . "<br>";
        echo "email: " . $email . "<br>";
        echo "numero: " . $numero . "<br>";
        echo "hotel: " . $hotel . "<br>";
        echo "tipo: " . $tipo . "<br>";

        echo "optional: ";
        foreach($opt as $optional){
            echo $opt . ", ";
        }


    }
