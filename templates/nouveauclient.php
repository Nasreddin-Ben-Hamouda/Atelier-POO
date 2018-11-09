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


    <div >  <h1>Nouveau client</h1></div>

      <form  method="post" class="form-group" action="../classes/ajout.php" >

        <hr>


        <label>Nom:</label>
        <input type="text" name="nom" placeholder="votre nom " class="form-control" ><br>


         <label>Prenom:</label>
        <input type="text" name="prenom" placeholder="votre  prenom" class="form-control" ><br>

		   <label>Date de naissance:</label>
        <input type="date" name="date" placeholder="votre Date de naissance" class="form-control" ><br>
           <label>Adreese:</label>
        <input type="text" name="adresse" placeholder="votre Adresse" class="form-control" ><br>


        <label>Téléphone:</label>
        <input type="number" name="telephone" placeholder="(+216)" class="form-control" ><br>

		  <h4>  <input type="checkbox" name="contrat"> Contrat lu et accepter .</h4>
        <input type="submit" name="envoyer" value="envoyer" class="btn btn-info" >


      </form>




</div>

  </body>
</html>
