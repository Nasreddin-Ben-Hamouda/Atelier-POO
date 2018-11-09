<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <?php include 'navbar.php'?>
    <?php include 'footer.html'?>
  </head>
    <body>
      <div class="container">
        <div class="row">
          <div class="form-group">
           <h1 align="center" ><label>Gestion de comptes bancaires et transactions</label></h1>
          </div>

          <div class="col-sm-4" align="center">
         <div style="" class="panel panel-danger">
              <div class="panel-heading">
              <label><span class="glyphicon glyphicon-user"></span>Client</label>
              </div>

              <div class="panel-body">
                <div class="form-group">
                  <ul><p>Accéder à la section de gestion des clients :</p>
                    <li>Ajouter un nouveau client,modifier,supprimer</li>
                    <li>Afficher un état</li>
                    <li>etc...</li></ul>
                </div>
              </div>
              <div class="form-group">
                <div class="panel-footer">
                <a href="clients.php"><input type="submit" name="" value="Accéder à la page clients" class="btn btn-danger"></a>
                </div>
              </div>
          </div>
          </div>

          <div class="col-sm-4" align="center">
          <div class="panel panel-danger">
              <div class="panel-heading">
              <label><span class="glyphicon glyphicon-briefcase"></span>Comptes</label>
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <ul><p>Accéder à la section de gestion des comptes :</p>
                    <li>Ajouter un nouveau compte,modifier,supprimer</li>
                    <li>Afficher un état</li>
                    <li>etc...</li></ul>
                </div>
              </div>
              <div class="form-group">
                <div class="panel-footer">
                <a href="compte.php"><input type="submit" name="" value="Accéder à la page des comptes" class="btn btn-danger"></a>
                </div>
              </div>
          </div>
          </div>

          <div class="col-sm-4" align="center">
          <div class="panel panel-danger">
              <div class="panel-heading">
              <label><span class="glyphicon glyphicon-sort"></span>Transactions</label>
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <ul><p>Accéder à la section des transactions :</p>
                  <li>Ajouter une nouvelle Transactions,modifier,supprimer</li>
                    <li>Afficher un état</li>
                    <li>etc...</li></ul>
                </div>
              </div>
              <div class="form-group">
                <div class="panel-footer">
                <a href="transactions.php"><input type="submit" name="" value="Accéder à la page transactions" class="btn btn-danger"></a>
                </div>
              </div>
          </div>
          </div>

        </div>
      </div>
    </body>
</html>
