<?php
 
 function generate(){
    $valide=rand(1000,9999);
    $code="L1AB".$valide;
    echo $code;
 }
 generate();
