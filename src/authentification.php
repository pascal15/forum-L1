<?php

namespace src\session ;

$i=0;

if(isset($_POST['name']) && !empty($_POST['name'])){
    $name=securite($_POST['name']);
    $_SESSION['name']=$name;
}else{
    $_SESSION['error_name']='le nom est requis';
    $i++;
}
if(isset($_POST['passe']) && !empty($_POST['passe'])){
    $pswrd=securite($_POST['passe']);
    $_SESSION['name']=$pswrd;
}else{
    $_SESSION['error_passe']='le mot de passe est requis';
    $i++;
}
if(isset($_POST['email']) && !empty($_POST['email'])){
    $email=securite($_POST['email']);
    $_SESSION['email']=$email;
}else{
    $_SESSION['error_email']='l\'adresse mail est requis';
    $i++;
}
if(isset($_POST['matricule']) && !empty($_POST['matricule'])){
    $matricule=securite($_POST['matricule']);
    $_SESSION['matricule']=$matricule;
}else{
    $_SESSION['error_matricule']='le matricule est requis';
    $i++;
}
if(isset($_POST['confirm']) && !empty($_POST['confirm'])){
    $confirm=securite($_POST['confirm']);
    $_SESSION['confirm_passwrd']=$confirm;
}else{
    $_SESSION['error_confirm']='le nom est requis';
    $i++;
}

if($i!=0){
    echo "nous sommes desole";
}