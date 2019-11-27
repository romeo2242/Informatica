<?php
    
    $_SESSION["cliccata"]=0;
    $immagine1= $_SESSION["vImm"][$_SESSION["r1"]*2+$_SESSION["c1"]];
    $immagine2= $_SESSION["vImm"][$_SESSION["r2"]*2+$_SESSION["c2"]];
    
    
    if($immagine1==$immagine2){
        $_SESSION["trovate"]=$_SESSION["trovate"]+1;
        $_SESSION["coppia".$_SESSION["trovate"]] = "<br> <img src=\"".$immagine1."\" width=100 height=100> <img src=\"".$immagine2."\" width=100 height=100> <br>";
        echo $_SESSION["coppia".$_SESSION["trovate"]];
    }else{
        echo "<br> <img src=\"".$immagine1."\" width=100 height=100> <img src=\"".$immagine2."\" width=100 height=100> <br>";

    }

    if($_SESSION["trovate"]==4){
        echo "Bravissimo hai vinto";
    }else{
        require 'memory.html';
    }
    
    
?>