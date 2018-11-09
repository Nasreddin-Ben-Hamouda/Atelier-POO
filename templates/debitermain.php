<?php
include '../classes/compte.class.php' ;
include '../classes/dbconnect.class.php';
if(isset($_POST) && !empty($_POST)){

 $titulaire = $_POST['tit'] ;
 $montant = $_POST['mont'] ;
 $compte = new compte;
 $compte->debit($titulaire,$montant);

}
