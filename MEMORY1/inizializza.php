<?php

    session_start();

    $_SESSION["cliccate"]=0;
    $_SESSION["r1"]=0;
    $_SESSION["c1"]=0;
    $_SESSION["r2"]=0;
    $_SESSION["c2"]=0;               
    $_SESSION["vImm"]=["img//picche.png","img//cuori.png","img//quadri.png","img//fiori.png","img//picche.png","img//cuori.png","img//quadri.png","img//fiori.png"];
    $_SESSION["trovate"]=0;
    $_SESSION["c1"]="";
    $_SESSION["c2"]="";
    $_SESSION["c3"]="";
    $_SESSION["c4"]="";

    shuffle($_SESSION["vImm"]);
   

?>