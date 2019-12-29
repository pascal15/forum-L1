<?php
require('init.php');
$nom=!empty($_POST['name'])?($_POST['name']):'';
$code=!empty($_POST['code'])?($_POST['code']):'';

$i=0;

if(empty($_POST['name'])){
    $_SESSION['error_name']='le nom est requis';
    $i++;
}else{
    $_SESSION['name']=$nom;
}
if(empty($_POST['code'])){
    $_SESSION['error_code']='le code d\'acces est requis';
    $i++;
}else{
    $_SESSION['code'=$code;
}
if($i!=0){
    
}

$req=$bdd->prepare('SELECT * FROM membre WHERE nom=:nom AND code=:code');
$req->execute([
    'nom'
])