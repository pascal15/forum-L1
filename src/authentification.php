<?php

require('session\session.php');
require('code.php');

function securite($nom){
    $nom=htmlspecialchars(htmlentities($nom));
    return $nom;
}

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

if($pswrd!==$confirm){
    $_SESSION['error_pswrd']="les deux password doivent etre identque";
    $i++;
}


if($i!=0){
    header('location:../compte.php');
}else{
    $req=$bdd->prepare('SELECT * FROM membre WHERE nom=:nom AND email=:email');
    $req->execute([
        'nom'=>$name,
        'email'=>$email
    ]);
    $existe=$req->fetch(PDO::FETCH_ASSOC);
    if(!$existe){
        $req=$bdd->prepare('INSERT INTO membre(nom,email,code,matricule,passwrd) VALUES(:nom,:email,:code,:matricule,:passwrd)');
        $req->execute([
            'nom'=>$name,
            'email'=>$email,
            'code'=>generate(),
            'matricule'=>$matricule,
            'passwrd'=>md5($pswrd)
        ]);
        session_name('pascal');
        session_start();
        $_SESSION['name']=$name;
        header('location:');
    }else{
        echo "ces identifiants sont utilises";
    }
}