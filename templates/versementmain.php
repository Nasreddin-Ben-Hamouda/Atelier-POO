<?php
include '../classes/compte.class.php' ;
include '../classes/dbconnect.class.php';
if(isset($_POST) && !empty($_POST)){
 $titulaire1 = $_POST['tit1'] ;
 $titulaire = $_POST['tit'] ;
 $montant = $_POST['mont'] ;
 $compte = new compte;
 $compte->debit($titulaire1,$montant);
 $compte->credit($titulaire,$montant);


}


?>
