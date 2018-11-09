<?php

class compte
{
  private $cnx;

  public function __construct()
  {
    $bd = new dbconnect;
    $connect = $bd->database();
    $this->cnx = $connect;
  }

  public function execReq($sql){
    $stmt = $this->cnx->prepare($sql);
    return $stmt;
  }

  public function createAccount($codeBank,$codeGuichet,$clerib,$titulaire,$solde,$devise)
  {
      try{
          $id = mt_rand();

          $sql = "INSERT INTO comptes(codebanq,codeGuichet,cleRib,titulaire,solde,devise,dateCreation) VALUES (:compte_codeBank,:compte_codeGuichet,:compte_clerib,:compte_titulaire,:compte_solde,:compte_devise,NOW())";
          $result = $this->execReq($sql);
          //$result->bindparam(":compte_id",$id);
          $result->bindparam(":compte_codeBank",$codeBank,PDO::PARAM_INT);
          $result->bindparam(":compte_codeGuichet",$codeGuichet,PDO::PARAM_INT);
          $result->bindparam(":compte_clerib",$clerib,PDO::PARAM_INT);
          $result->bindparam(":compte_titulaire",$titulaire,PDO::PARAM_STR);
          $result->bindparam(":compte_solde",$solde,PDO::PARAM_INT);
          $result->bindparam(":compte_devise",$devise,PDO::PARAM_INT);

          $result->execute();
          return $result;
      }
      catch(PDOException $ex){
          echo $ex->getMessage();
      }
  }

  public function readAllAccounts()
  {
      try
      {
          $sql = 'SELECT * FROM comptes ORDER BY datecreation,id DESC ';
          $result = $this->execReq($sql);
          $result->execute();
          return $result;
      }
      catch (PDOException $exception)
      {
          echo $exception->getMessage();
      }
  }

  public function readSpecificAccount($id){
      try{
          $sql = 'SELECT * FROM comptes WHERE id = :compte_id';
          $req = $this->execReq($sql);
          $req->bindparam(":compte_id",$id);
          $req->execute();
          return $req;
      }
      catch(PDOException $ex){
          echo $ex->getMessage();
      }
  }
  public function readSpecificTitulaire($titulaire){
      try{
          $sql = 'SELECT * FROM comptes WHERE titulaire = :compte_titulaire';
          $req = $this->execReq($sql);
          $req->bindparam(":compte_titulaire",$titulaire);
          $req->execute();
          return $req;
      }
      catch(PDOException $ex){
          echo $ex->getMessage();
      }
  }

  public function updateAccount($id,$codeBank,$codeGuichet,$clerib,$titulaire,$solde,$devise)
  {
      try
      {
          $sql = "UPDATE comptes SET codeBanq=:codeBanq,codeGuichet=:codeGuichet,cleRib=:cleRib,titulaire=:titulaire,solde=:solde,devise=:devise,dateCreation=NOW() WHERE id=:compte_id";
          $result = $this->execReq($sql);
          $result->bindparam(":compte_id",$id);
          $result->bindparam(":codeBanq",$codeBank);
          $result->bindparam(":codeGuichet",$codeGuichet);
          $result->bindparam(":cleRib",$clerib);
          $result->bindparam(":titulaire",$titulaire);
          $result->bindparam(":solde",$solde);
          $result->bindparam(":devise",$devise);
          $result->execute();
          return $result;

      }
      catch (PDOException $exception)
      {
          echo $exception->getMessage();
      }
  }

  public function deleteAccount($id)
  {
      try
      {
          $sql = 'DELETE FROM comptes WHERE id = :compte_id';
          $result = $this->execReq($sql);
          $result->bindparam(":compte_id",$id);
          $result->execute();
          return $result;
      }
      catch (PDOException $exception)
      {
          echo $exception->getMessage();
      }
  }

  public function getSolde($titulaire){
    try {
        $sql = 'SELECT solde FROM comptes WHERE titulaire = :compte_id';
        $result = $this->execReq($sql);
        $result->bindparam(":compte_id",$titulaire);
        $result->execute();
        return $result;
    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }

  public function updateSolde($titulaire,$montant){
    try {
        $sql = 'UPDATE comptes SET solde = :compte_solde WHERE titulaire = :compte_titulaire';
        $result = $this->execReq($sql);
        $result->bindparam(":compte_solde",$montant);
        $result->bindparam(":compte_titulaire",$titulaire);
        $result->execute();
        return $result;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function credit($titulaire,$montant){
    try {
      $query = $this->getSolde($titulaire);
      $solde = $query->fetchColumn();
      $solde+=$montant;
      $this->updateSolde($titulaire,$solde);
    } catch (Exception $e) {
      echo $e->getMessage();
    }
    header("Location: compte.php");
  }

  public function debit($titulaire,$montant){
    try {
      $query = $this->getSolde($titulaire);
      $solde = $query->fetchColumn();
      $solde-=$montant;
      $this->updateSolde($titulaire,$solde);
    } catch (Exception $e) {
      echo $e->getMessage();
    }
      header("Location: compte.php");
  }


}
 ?>
