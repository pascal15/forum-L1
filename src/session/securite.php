<?php
function securite($name){
    $name=htmlspecialchars(htmlentities($name));
    return $name;
}