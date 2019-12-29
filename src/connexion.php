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
    header('location:../connexion.php');
}
else{
    $req=$bdd->prepare('SELECT * FROM membre WHERE nom=:nom AND code=:code');
    $req->execute([
        'nom'=>$nom,
        'code'=>$code
    ]);
    $exist=$req->fetch(PDO::FETCH_ASSOC);
    if(!$exist){
        $_SESSION['error_session']='ces identifiants n\'existent pas';
        header('location:../connexion.php');
    }else{
        header('location:../main.php');
    }
}
