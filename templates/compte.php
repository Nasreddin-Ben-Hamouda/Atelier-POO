<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <?php include 'navbar.php';
     include 'footer.html';
    include '../classes/dbconnect.class.php';
    include '../classes/compte.class.php';
  ?>
</head>
<body>
  <div class="container">
      <?php
          $compte = new compte;

      ?>
      <div class="row">
          <div class="col-lg-6">
              <div class="input-group">
                  <a href="nouveaucompte.php">
                      <button class="btn btn-info"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp; Nouveau compte</button>
                  </a>
              </div>
          </div>
          <div class="col-lg-6">
              <div class="input-group">
                  <input type="text" class="form-control" placeholder="Chercher par nom de compte">
                  <span class="input-group-btn">
                      <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                  </span>
              </div>
          </div>
      </div>
      <br>
      <?php
      if (isset($_GET['del_id'])) {
          $suppression = $compte->deleteAccount($_GET['del_id']);
          if(!empty($suppression)){
              ?>
              <div class="alert alert-danger alert-dismissable fade in">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  Suppression Effectuée avec succès !
              </div>
              <?php
          }
      }
      ?>
      <div class="row">
          <div class="col-lg-12">
              <table class="table table-hover">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>codeBank</th>
                          <th>codeGuichet</th>
                          <th>cleRib</th>
                          <th>Titulaire</th>
                          <th>Solde</th>
                          <th>Devise</th>
                          <th>DateCreation</th>
                      </tr>
                  </thead>
                  <tbody>
                  <?php
                      $compte = new compte;
                      $listcompte = $compte->readAllAccounts();
                      if ($listcompte->rowCount()>0)
                      {
                          while ($ligne = $listcompte->fetch(PDO::FETCH_ASSOC))
                          {
                              extract($ligne);
                              echo "<tr>";
                              echo "<td>".$ligne['id']."</td>";
                              echo "<td>".$ligne['codeBanq']."</td>";
                              echo "<td>".$ligne['codeGuichet']."</td>";
                              echo "<td>".$ligne['cleRib']."</td>";
                              echo "<td>".$ligne['titulaire']."</td>";
                              echo "<td>".$ligne['solde']."</td>";
                              echo "<td>".$ligne['devise']."</td>";
                              echo "<td>".$ligne['dateCreation']."</td>";
                              echo "<td><a href=\"modifiercompte.php?update_id=".$ligne['id']."\" onclick=\"return confirm('Editer ce compte ?')\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Modifier\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></a>&nbsp;";
                              echo "<a href=\"?del_id=".$ligne['id']."\" onclick=\"return confirm('Etes vous sûre de vouloir supprimer ce compte ?')\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Supprimer\"><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></a></td>";
                              echo "</tr>";
                          }
                      }
                  ?>
                  </tbody>
              </table>
          </div>
      </div>

  </div>

</body>
</html>
