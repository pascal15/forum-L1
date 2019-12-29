<?php
session_name('pascal');
session_start();
try{
    $bdd=new PDO('mysql: host=localhost;dbname=forum','root','');
    include('code.php');
}catch(EXCEPTION $e){
    die('error:'.$e->getmessage());
}



?>