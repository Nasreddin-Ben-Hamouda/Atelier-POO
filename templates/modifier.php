<?php
include '../classes/client.class.php' ;
include '../classes/dbconnect.class.php';
if(isset($_POST) && !empty($_POST)){
 $id=$_POST['id'];
 $nom1 = $_POST['nom'] ;
 $prenom1 = $_POST['prenom'] ;
 $date1 = $_POST['date'] ;
 $adresse1 = $_POST['adresse'] ;
 $tel1 = $_POST['telephone'] ;
 $client1 = new client;
 if($client1->updateClient($id,$nom1,$prenom1,$date1,$adresse1,$tel1)){header('location:clients.php');}
 else{echo"faux";}
}
?>
