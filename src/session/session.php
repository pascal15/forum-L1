<?php
session_name('pascal');
session_start();

$_SESSION['name']=null;
$_SESSION['error_name']=null;
$_SESSION['passe']=null;
$_SESSION['error_passe']=null;
$_SESSION['email']=null;
$_SESSION['error_email']=null;
$_SESSION['matricule']=null;
$_SESSION['error_matricule']=null;
$_SESSION['confirm_passwrd']=null;
$_SESSION['error_confirm']=null;

try{
    $bdd=new PDO('mysql:host=localhost;dbname=forum','root','');
}catch(Exception $e){
    die ('erreur:'.$e->getmessage());
}