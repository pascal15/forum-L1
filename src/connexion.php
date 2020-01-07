<?php
require('session\session.php');

$i=0;

if(isset($_POST['name']) and !empty($_POST['name'])){
    $name=($_POST['name']);
    $_SESSION['name']=$name;

}else{
    $_SESSION['error_name']='le nom est requis';
    $i++;
}

if(isset($_POST['code']) and !empty($_POST['code'])){
    $code=($_POST['code']);
    $_SESSION['code']=$code;
}else{
    $_SESSION['error_code']='le coded\'acces est requis';
    $i++;
}

echo $i;
if($i!=0){
    header('location:../connexion.php');
}else{
    
    $req=$bdd->query("SELECT * FROM membre WHERE nom='{$name}' AND code='{$code}'");
    

    $existe=$req->fetch();
    
    if($existe){
        session_name('pascal');
        session_start();
        $_SESSION['name']=$existe['nom'];
        header('location:../connecter.php');
    }else{
        echo"veuillez vous inscrire";
    }
}