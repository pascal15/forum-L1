<?php
session_name('pascal');
session_start();
try{
    $bdd=new PDO('mysql: host=localhost;dbname=id12073759_forum','id12073759_pascal','pascalik');
    include('code.php');
}catch(EXCEPTION $e){
    die('error:'.$e->getmessage());
}



?>