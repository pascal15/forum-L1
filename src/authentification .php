<?php
require('init.php');

$name= isset($_POST['name'])?$_POST['name']:'';
$passe= isset($_POST['passe'])?$_POST['passe']:'';
$email= isset($_POST['email'])?$_POST['email']:'';
$conf= isset($_POST['conf'])?$_POST['conf']:'';
$mat= isset($_POST['mat'])?$_POST['mat']:'';

$_SESSION   ['name']= null;
$_SESSION   ['error_name']= null;
$_SESSION   ['passe']= null;
$_SESSION   ['error_passe']= null;
$_SESSION   ['email']= null;
$_SESSION   ['error_email']= null;
$_SESSION   ['conf']= null;
$_SESSION   ['error_conf']= null;
$_SESSION   ['mat']= null;
$_SESSION   ['error_mat']= null;

$i=0;

if(!isset($_POST['name'])){
    $_SESSION['error_name']='le nom est requis';
    $i++;
}else{
    $_SESSION['name']=$name;
}
if(!isset($_POST['passe'])){
    $_SESSION['error_passe']='le mot de passe est requis';
    $i++;
}else{
    $_SESSION['passe']=$passe;
}
if(!isset($_POST['email'])){
    $_SESSION['error_email']='l\'adresse mail est requis';
    $i++;
}else{
    $_SESSION['email']=$email;
}
if(!isset($_POST['conf'])){
    $_SESSION['error_conf']='veiller confirmer le mot de passe';
    $i++;
}else{
    $_SESSION['conf']=$conf;
}
if(!isset($_POST['mat'])){
    $_SESSION['error_mat']='le matricule est requis';
    $i++;
}else{
    $_SESSION['mat']=$mat;
}
if(!preg_match("# ^1[5-8]{1}[a-z]{2}[0-9]{3}+@[esisalama]{9}\.[org]{3}$#",strtolower($email))){
    $_SESSION['error_valide ']=' le mail doit être d\'esis';
    $i++;
}
if($passe!==$conf){
    $_SESSION['error_valide_passe']='les deux password doivent être conforme';
    $i++;
}
if(!preg_match("#^1[5-8]{1}[a-z]{2}[0-9]{3}#",strtolower($mat))){
    $_SESSION['error_valide_mat']='le matricule doit être d\'esis';
    $i++;
}
if($i!=0){
    header('location:../index.php');
}else{
    $req=$bdd->prepare('SELECT * FROM membre WHERE nom=:nom,email=:email');

    $req -> execute (
        [
            'name'=>$name,
            'email'=>strtolower($email)
        ]);
    $existe=$req->fetch(PDO::FETCH_ASSOC);
    if(!$existe){
        $req=$bdd->prepare('INSERT INTO  membre(nom,email,code,passwrd) VALUES(nom=:nom,email=:email,code=:code,passwrd=:passwrd)');
        $req->execute(
            [
                'nom'=>$name,
                'email'=>strtolower($email),
                'code'=>generate(),
                'matrucule'=>md5($passe)
            ]);
    }
}