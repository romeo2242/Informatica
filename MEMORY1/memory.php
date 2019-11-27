<?php
    session_start();
    $r = $_REQUEST["r"];
    $c = $_REQUEST["c"];


    $_SESSION["cliccato"] = $_SESSION["cliccato"]+1;
    
   
    if($_SESSION["cliccato"]==1){

            $_SESSION["r1"]=$r;
            $_SESSION["c1"]=$c;
            require 'memory.html';
    }

    if($_SESSION["cliccato"]==2){
            $_SESSION["r2"]=$r;
            $_SESSION["c2"]=$c;
            
            require 'gioca.php';
    }
        
     
            
        
    
    

?>