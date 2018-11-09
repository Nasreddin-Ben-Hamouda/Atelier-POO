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


    <div >  <h1>Nouveau compte</h1></div>

      <form  method="post" class="form-group" action="ajoutcompte.php" >

        <hr>

        <label>codeBank:</label>
        <input type="text" name="codeb" placeholder="codeBank " class="form-control" ><br>

        <label>codeGuichet:</label>
        <input type="text" name="codeg" placeholder="codeGuichet " class="form-control" ><br>

        <label>cleRib:</label>
        <input type="text" name="cle" placeholder="cleRib " class="form-control" ><br>


        <label>Titulaire:</label>
        <input type="text" name="tit" placeholder="Titulaire " class="form-control" ><br>


         <label>Solde:</label>
        <input type="text" name="solde" placeholder="votre  solde" class="form-control" ><br>


           <label>Devise:</label>
        <input type="text" name="devise" placeholder="votre devise" class="form-control" ><br>
        <input type="submit" name="envoyer" value="envoyer" class="btn btn-info" >


      </form>




</div>

  </body>
</html>
