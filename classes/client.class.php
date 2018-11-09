<?php

class client
{
  public $cnct;

  public function __construct()
  {
      $db = new dbconnect;
      $connect = $db->database();
      $this->cnct = $connect;
  }

  public function execReq($sql){
      $stmt = $this->cnct->prepare($sql);
      return $stmt;
  }

  public function createClient($nom,$prenom,$dateBirth,$adr,$tel)
  {
      try{
          $id = mt_rand();
          $sql = "INSERT INTO client(nom,prenom,dn,adress,tel) VALUES (:clt_nom,:clt_prenom,:clt_dateN,:clt_adr,:clt_tel)";
          $result = $this->execReq($sql);
          // $result->bindParam(":clt_id",$id);
          $result->bindparam(":clt_nom",$nom,PDO::PARAM_STR);
          $result->bindparam(":clt_prenom",$prenom,PDO::PARAM_STR);
          $result->bindparam(":clt_dateN",$dateBirth);
          $result->bindparam(":clt_adr",$adr,PDO::PARAM_STR);
          $result->bindparam(":clt_tel",$tel,PDO::PARAM_INT);
          $result->execute();
          return $result;
      }
      catch(PDOException $ex){
          echo $ex->getMessage();
      }
  }

  public function readAllClients()
  {
      try
      {
          $sql = 'SELECT * FROM client ORDER BY nom,prenom DESC ';
          $result = $this->execReq($sql);
          $result->execute();
          return $result;
      }
      catch (PDOException $exception)
      {
          echo $exception->getMessage();
      }
  }

  public function readSpecificClient($id){
      try{
          $sql = 'SELECT * FROM client WHERE id = :user_id';
          $req = $this->execReq($sql);
          $req->bindparam(":user_id",$id);
          $req->execute();
          return $req;
      }
      catch(PDOException $ex){
          echo $ex->getMessage();
      }
  }

  public function updateClient($id,$nom,$prenom,$dateBirth,$adr,$tel)
  {
      try
      {
          $sql = "UPDATE client SET nom = :clt_nom,prenom = :clt_prenom,dn = :clt_dateN,adress = :clt_adr,tel = :clt_tel WHERE id = :clt_id";
          $result = $this->execReq($sql);
          $result->bindparam(":clt_id",$id);
          $result->bindparam(":clt_nom",$nom);
          $result->bindparam(":clt_prenom",$prenom);
          $result->bindparam(":clt_dateN",$dateBirth);
          $result->bindparam(":clt_adr",$adr);
          $result->bindparam(":clt_tel",$tel);
          $result->execute();
          return $result;

      }
      catch (PDOException $exception)
      {
          echo $exception->getMessage();
      }
  }

  public function deleteClient($id)
  {
      try
      {
          $sql = 'DELETE FROM client WHERE id = :clt_id';
          $result = $this->execReq($sql);
          $result->bindparam(":clt_id",$id);
          $result->execute();
          return $result;
      }
      catch (PDOException $exception)
      {
          echo $exception->getMessage();
      }
  }

  public function deconnect()
  {
    unset($this->cnct);
  }

}
