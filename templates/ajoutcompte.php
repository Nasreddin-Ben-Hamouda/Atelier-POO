<?php
include '../classes/compte.class.php' ;
include '../classes/dbconnect.class.php';
if(isset($_POST) && !empty($_POST)){
 $codeBank=$_POST['codeb'];
 $codeGuichet=$_POST['codeg'];
 $clerib=$_POST['cle'];
 $titulaire = $_POST['tit'] ;
 $solde = $_POST['solde'] ;
 $devise = $_POST['devise'] ;
 $compte = new compte;
 if($compte->createAccount($codeBank,$codeGuichet,$clerib,$titulaire,$solde,$devise)){header('location:compte.php');}
 else{echo"faux";}
}


?>
