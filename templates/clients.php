<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <?php include 'navbar.php';
    include 'footer.html';
     include '../classes/dbconnect.class.php';
     include '../classes/client.class.php';
   ?>

  </head>
  <body>
    <div class="container">
        <?php
            $client = new client;

        ?>
        <div class="row">
            <div class="col-lg-6">
                <div class="input-group">
                    <a href="nouveauclient.php">
                        <button class="btn btn-info"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp; Nouveau client</button>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Chercher par nom de client">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </span>
                </div>
            </div>
        </div>
        <br>
        <?php
        if (isset($_GET['del_id'])) {
            $suppression = $client->deleteClient($_GET['del_id']);
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
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Date de naissance</th>
                            <th>Adresse</th>
                            <th>Téléphone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $client = new client;
                        $listClient = $client->readAllClients();
                        if ($listClient->rowCount()>0)
                        {
                            while ($ligne = $listClient->fetch(PDO::FETCH_ASSOC))
                            {
                                extract($ligne);
                                echo "<tr>";
                                echo "<td>".$ligne['id']."</td>";
                                echo "<td>".$ligne['nom']."</td>";
                                echo "<td>".$ligne['prenom']."</td>";
                                echo "<td>".$ligne['dn']."</td>";
                                echo "<td>".$ligne['adress']."</td>";
                                echo "<td>".$ligne['tel']."</td>";
                                echo "<td><a href=\"modifierclient.php?update_id=".$ligne['id']."\" onclick=\"return confirm('Editer ce client ?')\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Modifier\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></a>&nbsp;";
                                echo "<a href=\"?del_id=".$ligne['id']."\" onclick=\"return confirm('Etes vous sûre de vouloir supprimer ce client ?')\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Supprimer\"><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></a></td>";
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
