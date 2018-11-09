<?php
include 'client.class.php' ;
include 'dbconnect.class.php';
if(isset($_POST) && !empty($_POST)){

 $nom = $_POST['nom'] ;
 $prenom = $_POST['prenom'] ;
 $date = $_POST['date'] ;
 $adresse = $_POST['adresse'] ;
 $tel = $_POST['telephone'] ;
 $client = new client;
 if($client->createClient($nom,$prenom,$date,$adresse,$tel)){header('location:../templates/clients.php');}
 else{echo"faux";}
}


?>
