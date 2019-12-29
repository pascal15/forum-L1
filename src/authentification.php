<?php
require('init.php');

$name= !empty($_POST['name'])?$_POST['name']:'';
$passe= !empty($_POST['passe'])?$_POST['passe']:'';
$email= !empty($_POST['email'])?$_POST['email']:'';
$conf= !empty($_POST['conf'])?$_POST['conf']:'';
$mat= !empty($_POST['mat'])?$_POST['mat']:'';

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

if(empty($_POST['name'])){
    $_SESSION['error_name']='le nom est requis';
    $i++;
}else{
    $_SESSION['name']=$name;
}

if(empty($_POST['passe'])){
    $_SESSION['error_passe']='le mot de passe est requis';
    $i++;
}else{
    $_SESSION['passe']=$passe;
}
if($i!=0){
    header('location:../compte.php');
}else{
    header('location:../connexion.php');
}
if(empty($_POST['email'])){
    $_SESSION['error_email']='l\'adresse mail est requis';
    $i++;
}else{
    $_SESSION['email']=$email;
}
if(empty($_POST['conf'])){
    $_SESSION['error_conf']='veiller confirmer le mot de passe';
    $i++;
}else{
    $_SESSION['conf']=$conf;
}
if(empty($_POST['mat'])){
    $_SESSION['error_mat']='le matricule est requis';
    $i++;
}else{
    $_SESSION['mat']=$mat;
}

if($passe!==$conf){
    $_SESSION['error_valide_passe']='les deux password doivent être conforme';
    $i++;
}

if($i!=0){
    header('location:../compte.php');

}else{
    // $req=$bdd->prepare('SELECT * FROM membre WHERE nom=:nom,email=:email');

    // $req -> execute (
    //     [
    //         'name'=>$name,
    //         'email'=>strtolower($email)
    //     ]);
    // $existe=$req->fetch(PDO::FETCH_ASSOC);
    // if(!$existe){
        $code=generate();
        $req=$bdd->prepare('INSERT INTO  membre(nom,email,code,passwrd) VALUES(nom=:nom,email=:email,code=:code,passwrd=:passwrd)');
        $req->execute(
            [
                'nom'=>$name,
                'email'=>strtolower($email),
                'code'=>$code,
                'passwrd'=>md5($passe)
            ]);
    }
}